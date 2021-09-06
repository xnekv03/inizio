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
                <title><![CDATA[{{ $address->title }}]]></title>
                <link>{{ route('address.detail', ['address' => $address]) }}</link>
                <address><![CDATA[{!! $address->address !!}]]></address>
                <address2><![CDATA[{!! $address->address2 !!}]]></address2>
                <district><![CDATA[{!! $address->district !!}]]></district>
                <addressal_code><![CDATA[{!! $address->addressal_code !!}]]></addressal_code>
                <phone><![CDATA[{!! $address->phone !!}]]></phone>
                <location><![CDATA[{!! $address->location !!}]]></location>
                <last_update><![CDATA[{!! $address->last_update !!}]]></last_update>
                <guid>{{ $address->id }}</guid>
                <pubDate>{{ $address->created_at }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>