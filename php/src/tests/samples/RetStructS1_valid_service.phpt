--TEST--
Test for RetStructS1_valid_service sample
--FILE--

<?php


try {

    $client = new WSClient(array("wsdl"=>"misc_files/ComplexDataTypesDocLitW.wsdl",
                                 "useSOAP" => "1.1"));
    $proxy = $client->getProxy();	
    $s1_array = array("inStructS1" => array("name" => "WSO2 PHP developer"));
    $val =  $proxy->RetStructS1($s1_array);    
    echo "\n";
    var_dump($val);

} catch (Exception $e) {

		printf("Message = %s\n",$e->getMessage());
}
?>

--EXPECT--
Response = <ns1:echo xmlns:ns1="http://php.axis2.org/samples">
		<text>Hello World!</text>
	</ns1:echo>








