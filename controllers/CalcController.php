<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Offer;
use yii\db\Expression;
use app\components\Mobile_Detect;

/**
 * Калькуляторы
 * @author Zhugel Dmitriy
 */
class CalcController extends Controller {

    public $enableCsrfValidation = false;

    public function init() {
        parent::init();
        $this->layout = 'biznex';
    }

    public function actionCredit() {
        Yii::$app->view->params['body_class'] = 'page-service-details boxed-menu';
        Yii::$app->view->params['main_category_alias'] = 'services';
        Yii::$app->params['controller_js'] = 'js/controllers/calc.js';
        $offers = Offer::find()->where(['TYPE' => Offer::TYPE_CREDIT])->orderBy(new Expression('rand()'))->limit(1)->all();
        $detect = new Mobile_Detect();
        $is_mobile = $detect->isMobile();
        return $this->render('credit', ['offers' => $offers, 'is_mobile' => $is_mobile]);
    }

    public function actionIpoteka() {
        Yii::$app->view->params['body_class'] = 'page-service-details boxed-menu';
        Yii::$app->view->params['main_category_alias'] = 'services';
        Yii::$app->params['controller_js'] = 'js/controllers/calc.js';
        $offers = Offer::find()->where(['TYPE' => Offer::TYPE_IPOTEKA])->orderBy(new Expression('rand()'))->limit(1)->all();
        $detect = new Mobile_Detect();
        $is_mobile = $detect->isMobile();
        return $this->render('ipoteka', ['offers' => $offers, 'is_mobile' => $is_mobile]);
    }

	public function actionCompare() {
		Yii::$app->view->params['body_class'] = 'page-service-details boxed-menu';
		Yii::$app->view->params['main_category_alias'] = 'services';
		Yii::$app->params['controller_js'] = 'js/controllers/calc.js';
		$offers = Offer::find()->where(['TYPE' => Offer::TYPE_CREDIT])->orderBy(new Expression('rand()'))->limit(1)->all();
		$detect = new Mobile_Detect();
		$is_mobile = $detect->isMobile();
		return $this->render('compare', ['offers' => $offers, 'is_mobile' => $is_mobile]);
	}
	
    /**
     * Рассчет кредита
     */
    public function actionDetail() {
        $sum = (int) Yii::$app->request->post('SUM');
        $currency = Yii::$app->request->post('CURRENCY');
        $term = (int) Yii::$app->request->post('TERM');
		$compare = Yii::$app->request->post('COMPARE');
        $percent = str_replace(',', '.', Yii::$app->request->post('PERCENT'));
        $percent = preg_replace('/[^.0-9]/', '', $percent);
        $percent = floatval($percent);
        $percent_month = $percent / 1200;

        $month_pay = $sum * ( $percent_month + $percent_month / ( pow(1 + $percent_month, $term) - 1 ) );
        $summ_pay = $month_pay * $term;
        $more_pay = $summ_pay - $sum;

        $schedule = $this->getSchedule($sum, $term, $percent, $month_pay);
		$detect = new Mobile_Detect();
		$is_mobile = $detect->isMobile();

        $content = $this->renderPartial($compare?'_credit_detail_compare':'_credit_detail', [
            'month_pay' => $month_pay,
            'summ_pay' => $summ_pay,
            'more_pay' => $more_pay,
            'schedule' => $schedule,
            'currency' => $currency,
			'is_mobile' => $is_mobile
        ]);
        return json_encode(array('status' => 'OK', 'content' => $content));
    }

    /**
     * Рассчет графика платежей
     * @param type $sum
     * @param type $term
     * @param type $percent
     * @param type $month_pay
     * @return type
     */
    private function getSchedule($sum, $term, $percent, $month_pay) {
        $schedule = [];
        $debt = $sum; // Долг по кредиту
        $avg_day_count = 365 / 12; // Среднее кол-во дней в месяце
        for ($i_term = 1; $i_term <= $term; $i_term++) {
            $percent_pay = ($percent / 100 / 365 * $avg_day_count) * $debt;
            $debt_part = $month_pay - $percent_pay;
            $schedule[] = [
                'i_term' => $i_term,
                'debt' => $debt,
                'percent_pay' => $percent_pay,
                'debt_part' => $debt_part,
                'debt_balance' => abs($debt - $debt_part)
            ];
            $debt = $debt - $debt_part;
        }
        return $schedule;
    }

}
