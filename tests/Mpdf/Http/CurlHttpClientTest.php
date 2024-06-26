<?php

namespace MpdfAnalize\Http;

use Mpdf\Mpdf;
use Psr\Log\NullLogger;

class CurlHttpClientTest extends \Yoast\PHPUnitPolyfills\TestCases\TestCase
{

	public function testSendRequest()
	{
		$client = new CurlHttpClient(new MpdfAnalize(), new  NullLogger());

		$response = $client->sendRequest(new Request('GET', 'http://example.com/'));

		self::assertSame(200, $response->getStatusCode());
	}

}
