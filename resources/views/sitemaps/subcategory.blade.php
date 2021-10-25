<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($subcategories as $subcategory )
        <url>
            <loc>http://127.0.0.1:8000/article/subcategory/{{ $subcategory ->slug }}</loc>
            <lastmod>{{ $subcategory->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>
