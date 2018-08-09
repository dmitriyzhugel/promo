<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
	    <loc>http://zaimovik.info/</loc>
	    <lastmod><?=date('c',strtotime(date('Y-m-d')));?></lastmod>
	    <changefreq>daily</changefreq>
	    <priority>1.0</priority>
    </url>
<?php foreach($urls as $url){ ?>
	<url>
		<loc>http://<?=$site;?>/<?=$url['CATEGORY_ALIAS'];?>/<?=$url['POST_ALIAS'];?>/</loc>
		<lastmod><?=date('c', strtotime($url['UP_DATE']));?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.8</priority>
	</url>
<?php } ?>
    <url>
	<loc>http://zaimovik.info/calc/credit/</loc>
	<lastmod><?=date('c',strtotime(date('Y-m-d')));?></lastmod>
	<changefreq>daily</changefreq>
	<priority>0.8</priority>
    </url>
    <url>
	<loc>http://zaimovik.info/calc/ipoteka/</loc>
	<lastmod><?=date('c',strtotime(date('Y-m-d')));?></lastmod>
	<changefreq>daily</changefreq>
	<priority>0.8</priority>
    </url>
	<url>
	<loc>http://zaimovik.info/calc/compare/</loc>
	<lastmod><?=date('c',strtotime(date('Y-m-d')));?></lastmod>
	<changefreq>daily</changefreq>
	<priority>0.8</priority>
    </url>
</urlset>