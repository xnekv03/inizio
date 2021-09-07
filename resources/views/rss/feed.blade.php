<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ Nekvapil ]]></title>
        <link><![CDATA[ {{config('app.url')}} ]]></link>
        <description><![CDATA[ {{config('app.name')}} ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>

        @foreach($addresses as $address)
            <item>
                <title>{{ $address->address }}</title>
                <link>{{ route('address.detail', ['address' => $address]) }}</link>
                <pubDate>{{ $address->last_update->toIso8601String() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
