<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016091200495549",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEpQIBAAKCAQEA49XohPr+5mQALd0YUWd5wTAUXUzqFlXycVrvSFwCEjtuHecv34z6g1xiroo01JXGw316Q6R5/l1eSbYorR/vRee+hEqrdFeyHj2lTjItNwaJ2DHcM7TbhaiKm2jp1Nqi8gGrVA308QFG/hKn5gwEKdacoetVSyFtnxvzAnOiPuAlNTf2yblObLploJGsxF8u7h7AewKcDMrJCD7kArT/UCizXrvCNxbwFylmyv181OIEDQ3VaZW/ewH4EDdAkLDB4qxF/ZgrIlg6DvXg7svYKBjMwDjiUdwvD3stxuEYDYhgtrdrHTXOaTizEYdPiO35KMOlbVYslj8nXQC+/Fn6wwIDAQABAoIBAQC4XNgTA6hQdotOkaKj/L+hfG5+MUcbW+EbqSIHw6xJZJ3uxK0QkNwGgDO6WUv22lxExLyzD91H3/X0X9r6fOT6BFU+Z83mDzCrF+c0J5Y++KOCtpYhoTAiMAg5SeQtwd4pRwCEu+aBPy9bWW1T0lVsJaYJwIz8hshWAB/c1AVuKhvajK5BCuBI7vVn4Q0CbIFSSq/51MPod55BDl1qcoMZUoru+CJ3rYmyD/e+dkQCzlqzJVMQ+rg0W9SWdt2LDkDM/M+5EEkCSShuZ8FgCW3xz7O7vdTfWvpKRl96vxBei4PHfhbyLsmqsbbIABy/yMJol+y8jyhYj+rMzEbyvMDBAoGBAPn8p8sJdomnDVbSWqJ+cetqUHSaN8OeaG0OL47VaL2SwQLMklJZQYpQQ/tmAJ4qP/uLneFfk/Pmnzc+wHmOtXDJuaQEKVDNknfg0CZiWiPscIc2q5zgJeCY995fzPd7z29qZjKGaKIF2KmuWRFq5DFVzuQqqLaw2k4jLsIEUM33AoGBAOlQ2fdlTzxkl/ETO7B4FaPpZBXeOH5PR5B+iV+jeEsbBuRZw7Wwayb8VfG3VNSBOQrapS2C2qFznjh8I8R9AD3F0HizpmA1P+UN+j7k56dbh1eYEJH13UOpwY3hqOh38gJQcL20ZNjZkbFKgkqhUD+Irpk6+UhxnYYYxH4JIDaVAoGBAPP3vm2pS5UlgiAkZK3Gxzjf5asWQqvXscQUnxc/cNvqGBG6Qma5kvwAP4he0OWLCCxe4nLry0Gx5dqNlFxNiQeM526JXSTtqy7xKVL8k0oR2vQqx6rvGigqQWU1i5xPqW7roNdYU08kc4GNlIEqF4+KVcJZW5QH3tV5Ao34lj+bAoGAMJ3ATWS21gbAAmPXlDXxjG4dhNEBRJCQgPNc/Ki7cCr5jKuHtFxGd6Es52kkLAOhNznIIWua0vmchniXm2HQow6NGhmVGYb/AWOgOWrJOn4//WiaS0/IA0lkI4RaBda4fvL0CxOD0AvF6AN2ksZ6SkLY3uUC/K1v/Xk7uGd+ZuECgYEAnNpy3HMITxmNPtLA8W7Sg8vFnXTyj66UhulgFRum5GNyMgH4cZaUmGYjvUsVpblgsbGFYWlqFho+rTuQ/iFisspOhBd0vMenlInJXvdjQIDGK6gKv2UZn+7W/U88Wr550mDf/vTYZZgkEk/DHwksU++e8elXwTdJKnXDIqQL414=",
		
		//异步通知地址
		'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
        'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",
		//'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA49XohPr+5mQALd0YUWd5wTAUXUzqFlXycVrvSFwCEjtuHecv34z6g1xiroo01JXGw316Q6R5/l1eSbYorR/vRee+hEqrdFeyHj2lTjItNwaJ2DHcM7TbhaiKm2jp1Nqi8gGrVA308QFG/hKn5gwEKdacoetVSyFtnxvzAnOiPuAlNTf2yblObLploJGsxF8u7h7AewKcDMrJCD7kArT/UCizXrvCNxbwFylmyv181OIEDQ3VaZW/ewH4EDdAkLDB4qxF/ZgrIlg6DvXg7svYKBjMwDjiUdwvD3stxuEYDYhgtrdrHTXOaTizEYdPiO35KMOlbVYslj8nXQC+/Fn6wwIDAQAB",


);