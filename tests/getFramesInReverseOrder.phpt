--TEST--
ffmpeg getFrame in reverse order test
--SKIPIF--
<?php 
extension_loaded('ffmpeg') or die("skip ffmpeg extension not loaded"); 
extension_loaded('gd') or die("skip gd extension not avaliable.");
function_exists("imagecreatetruecolor") or die("skip function imagecreatetruecolor unavailable");
?>
--FILE--
<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi');

$framecount = $mov->getFrameCount();
for($i = $framecount; $i > 0; $i--) {
    $img = sprintf("%s/test-%04d.png", dirname(__FILE__), $i);
    $frame = $mov->getFrame($i);
    $image = $frame->toGDImage();
    imagepng($image, $img);
    printf("ffmpeg getFramesInReverseOrder($i): md5 = %s\n", md5(file_get_contents($img)));
    imagedestroy($image);
    unlink($img);
}
?>
--EXPECT--
ffmpeg getFramesInReverseOrder(240): md5 = 5da7388e5b099cfb030b36cefcb260aa
ffmpeg getFramesInReverseOrder(239): md5 = 5da7388e5b099cfb030b36cefcb260aa
ffmpeg getFramesInReverseOrder(238): md5 = 5da7388e5b099cfb030b36cefcb260aa
ffmpeg getFramesInReverseOrder(237): md5 = 2817e435640fc7c26685401007ad6177
ffmpeg getFramesInReverseOrder(236): md5 = 2817e435640fc7c26685401007ad6177
ffmpeg getFramesInReverseOrder(235): md5 = 2817e435640fc7c26685401007ad6177
ffmpeg getFramesInReverseOrder(234): md5 = da9910064c0414e256056b769f942049
ffmpeg getFramesInReverseOrder(233): md5 = da9910064c0414e256056b769f942049
ffmpeg getFramesInReverseOrder(232): md5 = da9910064c0414e256056b769f942049
ffmpeg getFramesInReverseOrder(231): md5 = 52e93862544f05c92375d2aaa2c7dc16
ffmpeg getFramesInReverseOrder(230): md5 = 52e93862544f05c92375d2aaa2c7dc16
ffmpeg getFramesInReverseOrder(229): md5 = 52e93862544f05c92375d2aaa2c7dc16
ffmpeg getFramesInReverseOrder(228): md5 = 70c86d74b825b685d3e90c2dfa21f307
ffmpeg getFramesInReverseOrder(227): md5 = 70c86d74b825b685d3e90c2dfa21f307
ffmpeg getFramesInReverseOrder(226): md5 = 70c86d74b825b685d3e90c2dfa21f307
ffmpeg getFramesInReverseOrder(225): md5 = e2d66cb30e1d942da4b603ecae95c64e
ffmpeg getFramesInReverseOrder(224): md5 = e2d66cb30e1d942da4b603ecae95c64e
ffmpeg getFramesInReverseOrder(223): md5 = e2d66cb30e1d942da4b603ecae95c64e
ffmpeg getFramesInReverseOrder(222): md5 = b68f724605514e4ae7676c04fff62461
ffmpeg getFramesInReverseOrder(221): md5 = b68f724605514e4ae7676c04fff62461
ffmpeg getFramesInReverseOrder(220): md5 = b68f724605514e4ae7676c04fff62461
ffmpeg getFramesInReverseOrder(219): md5 = cbf35af572f3947b04b391dbe8f01912
ffmpeg getFramesInReverseOrder(218): md5 = cbf35af572f3947b04b391dbe8f01912
ffmpeg getFramesInReverseOrder(217): md5 = cbf35af572f3947b04b391dbe8f01912
ffmpeg getFramesInReverseOrder(216): md5 = 55a1b21fb233ec1b965aa27fc5680ef7
ffmpeg getFramesInReverseOrder(215): md5 = 55a1b21fb233ec1b965aa27fc5680ef7
ffmpeg getFramesInReverseOrder(214): md5 = 55a1b21fb233ec1b965aa27fc5680ef7
ffmpeg getFramesInReverseOrder(213): md5 = 64bcd46af5519ad65722bc94e71a5628
ffmpeg getFramesInReverseOrder(212): md5 = 64bcd46af5519ad65722bc94e71a5628
ffmpeg getFramesInReverseOrder(211): md5 = 64bcd46af5519ad65722bc94e71a5628
ffmpeg getFramesInReverseOrder(210): md5 = d3ce913a9c16206990a6b9a80c0561f3
ffmpeg getFramesInReverseOrder(209): md5 = d3ce913a9c16206990a6b9a80c0561f3
ffmpeg getFramesInReverseOrder(208): md5 = d3ce913a9c16206990a6b9a80c0561f3
ffmpeg getFramesInReverseOrder(207): md5 = 08d8b9d438667d710cacc0d9081a4883
ffmpeg getFramesInReverseOrder(206): md5 = 08d8b9d438667d710cacc0d9081a4883
ffmpeg getFramesInReverseOrder(205): md5 = 08d8b9d438667d710cacc0d9081a4883
ffmpeg getFramesInReverseOrder(204): md5 = 85c3d4dbcd9315b00e220d334a012083
ffmpeg getFramesInReverseOrder(203): md5 = 85c3d4dbcd9315b00e220d334a012083
ffmpeg getFramesInReverseOrder(202): md5 = 85c3d4dbcd9315b00e220d334a012083
ffmpeg getFramesInReverseOrder(201): md5 = 23d6d68503ec607327ee6216bc695593
ffmpeg getFramesInReverseOrder(200): md5 = 23d6d68503ec607327ee6216bc695593
ffmpeg getFramesInReverseOrder(199): md5 = 23d6d68503ec607327ee6216bc695593
ffmpeg getFramesInReverseOrder(198): md5 = c26f6d4cf0737c5c6b102c048312f0fc
ffmpeg getFramesInReverseOrder(197): md5 = c26f6d4cf0737c5c6b102c048312f0fc
ffmpeg getFramesInReverseOrder(196): md5 = c26f6d4cf0737c5c6b102c048312f0fc
ffmpeg getFramesInReverseOrder(195): md5 = 0d2849f432fc9656c31629f6288feba0
ffmpeg getFramesInReverseOrder(194): md5 = 0d2849f432fc9656c31629f6288feba0
ffmpeg getFramesInReverseOrder(193): md5 = 0d2849f432fc9656c31629f6288feba0
ffmpeg getFramesInReverseOrder(192): md5 = d1ee4ba4a11217efd0cf8cba15a2eb1f
ffmpeg getFramesInReverseOrder(191): md5 = d1ee4ba4a11217efd0cf8cba15a2eb1f
ffmpeg getFramesInReverseOrder(190): md5 = d1ee4ba4a11217efd0cf8cba15a2eb1f
ffmpeg getFramesInReverseOrder(189): md5 = b0338a88dff4cbabb1599a807e5c6ef0
ffmpeg getFramesInReverseOrder(188): md5 = b0338a88dff4cbabb1599a807e5c6ef0
ffmpeg getFramesInReverseOrder(187): md5 = b0338a88dff4cbabb1599a807e5c6ef0
ffmpeg getFramesInReverseOrder(186): md5 = cc781178ac22f4cf6641183926067215
ffmpeg getFramesInReverseOrder(185): md5 = cc781178ac22f4cf6641183926067215
ffmpeg getFramesInReverseOrder(184): md5 = cc781178ac22f4cf6641183926067215
ffmpeg getFramesInReverseOrder(183): md5 = a5b5bfe8b20e018ef506d703b2af7ccc
ffmpeg getFramesInReverseOrder(182): md5 = a5b5bfe8b20e018ef506d703b2af7ccc
ffmpeg getFramesInReverseOrder(181): md5 = a5b5bfe8b20e018ef506d703b2af7ccc
ffmpeg getFramesInReverseOrder(180): md5 = 017aaef2fe10b6aa2788d7ea0620c252
ffmpeg getFramesInReverseOrder(179): md5 = 017aaef2fe10b6aa2788d7ea0620c252
ffmpeg getFramesInReverseOrder(178): md5 = 017aaef2fe10b6aa2788d7ea0620c252
ffmpeg getFramesInReverseOrder(177): md5 = f72576077cd616c026c7f56829f220ae
ffmpeg getFramesInReverseOrder(176): md5 = f72576077cd616c026c7f56829f220ae
ffmpeg getFramesInReverseOrder(175): md5 = f72576077cd616c026c7f56829f220ae
ffmpeg getFramesInReverseOrder(174): md5 = 8629707f6d5c1a205564ac5f6f10d89f
ffmpeg getFramesInReverseOrder(173): md5 = 8629707f6d5c1a205564ac5f6f10d89f
ffmpeg getFramesInReverseOrder(172): md5 = 8629707f6d5c1a205564ac5f6f10d89f
ffmpeg getFramesInReverseOrder(171): md5 = 4973cb1e537815ee8b7ef73e759f5c39
ffmpeg getFramesInReverseOrder(170): md5 = 4973cb1e537815ee8b7ef73e759f5c39
ffmpeg getFramesInReverseOrder(169): md5 = 4973cb1e537815ee8b7ef73e759f5c39
ffmpeg getFramesInReverseOrder(168): md5 = 274f9691f9d2360d53f299c1fba79614
ffmpeg getFramesInReverseOrder(167): md5 = 274f9691f9d2360d53f299c1fba79614
ffmpeg getFramesInReverseOrder(166): md5 = 274f9691f9d2360d53f299c1fba79614
ffmpeg getFramesInReverseOrder(165): md5 = f4af5e8779fa40f07b0285a4dc1b049d
ffmpeg getFramesInReverseOrder(164): md5 = f4af5e8779fa40f07b0285a4dc1b049d
ffmpeg getFramesInReverseOrder(163): md5 = f4af5e8779fa40f07b0285a4dc1b049d
ffmpeg getFramesInReverseOrder(162): md5 = 316351119812a64ff994bbad9332286e
ffmpeg getFramesInReverseOrder(161): md5 = 316351119812a64ff994bbad9332286e
ffmpeg getFramesInReverseOrder(160): md5 = 316351119812a64ff994bbad9332286e
ffmpeg getFramesInReverseOrder(159): md5 = db17bcfe68abe673bf3df8b8062714ab
ffmpeg getFramesInReverseOrder(158): md5 = db17bcfe68abe673bf3df8b8062714ab
ffmpeg getFramesInReverseOrder(157): md5 = db17bcfe68abe673bf3df8b8062714ab
ffmpeg getFramesInReverseOrder(156): md5 = d587fae1b39f3a2ffae867f9652e1ed7
ffmpeg getFramesInReverseOrder(155): md5 = d587fae1b39f3a2ffae867f9652e1ed7
ffmpeg getFramesInReverseOrder(154): md5 = d587fae1b39f3a2ffae867f9652e1ed7
ffmpeg getFramesInReverseOrder(153): md5 = 117c46c3a208183085c41eccf223c7e6
ffmpeg getFramesInReverseOrder(152): md5 = 117c46c3a208183085c41eccf223c7e6
ffmpeg getFramesInReverseOrder(151): md5 = 117c46c3a208183085c41eccf223c7e6
ffmpeg getFramesInReverseOrder(150): md5 = abe4ae47b43678b60c192fbb4d0a69b5
ffmpeg getFramesInReverseOrder(149): md5 = abe4ae47b43678b60c192fbb4d0a69b5
ffmpeg getFramesInReverseOrder(148): md5 = abe4ae47b43678b60c192fbb4d0a69b5
ffmpeg getFramesInReverseOrder(147): md5 = b84c2d59f936f7cae83e736dc2dd0ebc
ffmpeg getFramesInReverseOrder(146): md5 = b84c2d59f936f7cae83e736dc2dd0ebc
ffmpeg getFramesInReverseOrder(145): md5 = b84c2d59f936f7cae83e736dc2dd0ebc
ffmpeg getFramesInReverseOrder(144): md5 = 53343b23bb1a4aeb1f667608265fad9a
ffmpeg getFramesInReverseOrder(143): md5 = 53343b23bb1a4aeb1f667608265fad9a
ffmpeg getFramesInReverseOrder(142): md5 = 53343b23bb1a4aeb1f667608265fad9a
ffmpeg getFramesInReverseOrder(141): md5 = 3f4495bb347480746f2fb994465b25a9
ffmpeg getFramesInReverseOrder(140): md5 = 3f4495bb347480746f2fb994465b25a9
ffmpeg getFramesInReverseOrder(139): md5 = 3f4495bb347480746f2fb994465b25a9
ffmpeg getFramesInReverseOrder(138): md5 = 49feb765089580d9f3de8a6e36cbaed7
ffmpeg getFramesInReverseOrder(137): md5 = 49feb765089580d9f3de8a6e36cbaed7
ffmpeg getFramesInReverseOrder(136): md5 = 49feb765089580d9f3de8a6e36cbaed7
ffmpeg getFramesInReverseOrder(135): md5 = 3064adc7a54286b4c45f9fe3669e8b1d
ffmpeg getFramesInReverseOrder(134): md5 = 3064adc7a54286b4c45f9fe3669e8b1d
ffmpeg getFramesInReverseOrder(133): md5 = 3064adc7a54286b4c45f9fe3669e8b1d
ffmpeg getFramesInReverseOrder(132): md5 = d7a36b7a67f4ca8941931a15517f5eb1
ffmpeg getFramesInReverseOrder(131): md5 = d7a36b7a67f4ca8941931a15517f5eb1
ffmpeg getFramesInReverseOrder(130): md5 = d7a36b7a67f4ca8941931a15517f5eb1
ffmpeg getFramesInReverseOrder(129): md5 = 5d58afe8118077391b8523a065dd7fce
ffmpeg getFramesInReverseOrder(128): md5 = 5d58afe8118077391b8523a065dd7fce
ffmpeg getFramesInReverseOrder(127): md5 = 5d58afe8118077391b8523a065dd7fce
ffmpeg getFramesInReverseOrder(126): md5 = a89b9a83054bf8737a97c080f07a59bd
ffmpeg getFramesInReverseOrder(125): md5 = a89b9a83054bf8737a97c080f07a59bd
ffmpeg getFramesInReverseOrder(124): md5 = a89b9a83054bf8737a97c080f07a59bd
ffmpeg getFramesInReverseOrder(123): md5 = 7c58a3bc631a7ec1dd48de99658a5cc4
ffmpeg getFramesInReverseOrder(122): md5 = 7c58a3bc631a7ec1dd48de99658a5cc4
ffmpeg getFramesInReverseOrder(121): md5 = 7c58a3bc631a7ec1dd48de99658a5cc4
ffmpeg getFramesInReverseOrder(120): md5 = b0b6a709c28c75d9beffaaaba969ec12
ffmpeg getFramesInReverseOrder(119): md5 = b0b6a709c28c75d9beffaaaba969ec12
ffmpeg getFramesInReverseOrder(118): md5 = b0b6a709c28c75d9beffaaaba969ec12
ffmpeg getFramesInReverseOrder(117): md5 = 0ac65e51db3d7b40f55df3a43f3f03d2
ffmpeg getFramesInReverseOrder(116): md5 = 0ac65e51db3d7b40f55df3a43f3f03d2
ffmpeg getFramesInReverseOrder(115): md5 = 0ac65e51db3d7b40f55df3a43f3f03d2
ffmpeg getFramesInReverseOrder(114): md5 = 5ea25236d676122a90799adefc529611
ffmpeg getFramesInReverseOrder(113): md5 = 5ea25236d676122a90799adefc529611
ffmpeg getFramesInReverseOrder(112): md5 = 5ea25236d676122a90799adefc529611
ffmpeg getFramesInReverseOrder(111): md5 = 84410c79c7cf32562a83fa8f4bb981f7
ffmpeg getFramesInReverseOrder(110): md5 = 84410c79c7cf32562a83fa8f4bb981f7
ffmpeg getFramesInReverseOrder(109): md5 = 84410c79c7cf32562a83fa8f4bb981f7
ffmpeg getFramesInReverseOrder(108): md5 = ab2142ee9ec11e01e42a072ad5762030
ffmpeg getFramesInReverseOrder(107): md5 = ab2142ee9ec11e01e42a072ad5762030
ffmpeg getFramesInReverseOrder(106): md5 = ab2142ee9ec11e01e42a072ad5762030
ffmpeg getFramesInReverseOrder(105): md5 = 5e6ab28f31801cddb176f1c01d13f364
ffmpeg getFramesInReverseOrder(104): md5 = 5e6ab28f31801cddb176f1c01d13f364
ffmpeg getFramesInReverseOrder(103): md5 = 5e6ab28f31801cddb176f1c01d13f364
ffmpeg getFramesInReverseOrder(102): md5 = 57fe0edffdfcf06e88d7219662f04b05
ffmpeg getFramesInReverseOrder(101): md5 = 57fe0edffdfcf06e88d7219662f04b05
ffmpeg getFramesInReverseOrder(100): md5 = 57fe0edffdfcf06e88d7219662f04b05
ffmpeg getFramesInReverseOrder(99): md5 = b6485f3287312414e90fc0508ce9b194
ffmpeg getFramesInReverseOrder(98): md5 = b6485f3287312414e90fc0508ce9b194
ffmpeg getFramesInReverseOrder(97): md5 = b6485f3287312414e90fc0508ce9b194
ffmpeg getFramesInReverseOrder(96): md5 = 3b93b082d52c4ccb8dc5beb22c8316ab
ffmpeg getFramesInReverseOrder(95): md5 = 3b93b082d52c4ccb8dc5beb22c8316ab
ffmpeg getFramesInReverseOrder(94): md5 = 3b93b082d52c4ccb8dc5beb22c8316ab
ffmpeg getFramesInReverseOrder(93): md5 = 5887bfa75094567d9aec180eda7e45c6
ffmpeg getFramesInReverseOrder(92): md5 = 5887bfa75094567d9aec180eda7e45c6
ffmpeg getFramesInReverseOrder(91): md5 = 5887bfa75094567d9aec180eda7e45c6
ffmpeg getFramesInReverseOrder(90): md5 = 02172b5823992d273f7d4295f628309a
ffmpeg getFramesInReverseOrder(89): md5 = 02172b5823992d273f7d4295f628309a
ffmpeg getFramesInReverseOrder(88): md5 = 02172b5823992d273f7d4295f628309a
ffmpeg getFramesInReverseOrder(87): md5 = a73c78e3ae667682e9920a218353540b
ffmpeg getFramesInReverseOrder(86): md5 = a73c78e3ae667682e9920a218353540b
ffmpeg getFramesInReverseOrder(85): md5 = a73c78e3ae667682e9920a218353540b
ffmpeg getFramesInReverseOrder(84): md5 = d0bc5176b565500f09851abf059bf736
ffmpeg getFramesInReverseOrder(83): md5 = d0bc5176b565500f09851abf059bf736
ffmpeg getFramesInReverseOrder(82): md5 = d0bc5176b565500f09851abf059bf736
ffmpeg getFramesInReverseOrder(81): md5 = 97ea17ae200e6ca4e2412ba5546d4cdb
ffmpeg getFramesInReverseOrder(80): md5 = 97ea17ae200e6ca4e2412ba5546d4cdb
ffmpeg getFramesInReverseOrder(79): md5 = 97ea17ae200e6ca4e2412ba5546d4cdb
ffmpeg getFramesInReverseOrder(78): md5 = 25ea525ec2630b123da3bd18b44e391b
ffmpeg getFramesInReverseOrder(77): md5 = 25ea525ec2630b123da3bd18b44e391b
ffmpeg getFramesInReverseOrder(76): md5 = 25ea525ec2630b123da3bd18b44e391b
ffmpeg getFramesInReverseOrder(75): md5 = f8eb6d231d353e8d98cf76f1fcf960c3
ffmpeg getFramesInReverseOrder(74): md5 = f8eb6d231d353e8d98cf76f1fcf960c3
ffmpeg getFramesInReverseOrder(73): md5 = f8eb6d231d353e8d98cf76f1fcf960c3
ffmpeg getFramesInReverseOrder(72): md5 = 3cac4625a645a147a7e7cb8ab28ebf07
ffmpeg getFramesInReverseOrder(71): md5 = 3cac4625a645a147a7e7cb8ab28ebf07
ffmpeg getFramesInReverseOrder(70): md5 = 3cac4625a645a147a7e7cb8ab28ebf07
ffmpeg getFramesInReverseOrder(69): md5 = cc52ca71fc8daae8feba52fa329f9f66
ffmpeg getFramesInReverseOrder(68): md5 = cc52ca71fc8daae8feba52fa329f9f66
ffmpeg getFramesInReverseOrder(67): md5 = cc52ca71fc8daae8feba52fa329f9f66
ffmpeg getFramesInReverseOrder(66): md5 = d86b04f95208b77c06e49ba9a76b477f
ffmpeg getFramesInReverseOrder(65): md5 = d86b04f95208b77c06e49ba9a76b477f
ffmpeg getFramesInReverseOrder(64): md5 = d86b04f95208b77c06e49ba9a76b477f
ffmpeg getFramesInReverseOrder(63): md5 = 963b85dafe7ac84daf64a12931509de7
ffmpeg getFramesInReverseOrder(62): md5 = 963b85dafe7ac84daf64a12931509de7
ffmpeg getFramesInReverseOrder(61): md5 = 963b85dafe7ac84daf64a12931509de7
ffmpeg getFramesInReverseOrder(60): md5 = 7b1f32d4e4a1efce454c0b73ec015e75
ffmpeg getFramesInReverseOrder(59): md5 = 7b1f32d4e4a1efce454c0b73ec015e75
ffmpeg getFramesInReverseOrder(58): md5 = 7b1f32d4e4a1efce454c0b73ec015e75
ffmpeg getFramesInReverseOrder(57): md5 = c360fd94742147db7e97796a61eee19f
ffmpeg getFramesInReverseOrder(56): md5 = c360fd94742147db7e97796a61eee19f
ffmpeg getFramesInReverseOrder(55): md5 = c360fd94742147db7e97796a61eee19f
ffmpeg getFramesInReverseOrder(54): md5 = 3953dcbdeb9b687b2b1e925183a16c39
ffmpeg getFramesInReverseOrder(53): md5 = 3953dcbdeb9b687b2b1e925183a16c39
ffmpeg getFramesInReverseOrder(52): md5 = 3953dcbdeb9b687b2b1e925183a16c39
ffmpeg getFramesInReverseOrder(51): md5 = c61c4e4620af5adba309237a84ef91df
ffmpeg getFramesInReverseOrder(50): md5 = c61c4e4620af5adba309237a84ef91df
ffmpeg getFramesInReverseOrder(49): md5 = c61c4e4620af5adba309237a84ef91df
ffmpeg getFramesInReverseOrder(48): md5 = faa5ef30ddeb97020250c150779e3399
ffmpeg getFramesInReverseOrder(47): md5 = faa5ef30ddeb97020250c150779e3399
ffmpeg getFramesInReverseOrder(46): md5 = faa5ef30ddeb97020250c150779e3399
ffmpeg getFramesInReverseOrder(45): md5 = 9f77876e4926b92d5f7dc565ac94e366
ffmpeg getFramesInReverseOrder(44): md5 = 9f77876e4926b92d5f7dc565ac94e366
ffmpeg getFramesInReverseOrder(43): md5 = 9f77876e4926b92d5f7dc565ac94e366
ffmpeg getFramesInReverseOrder(42): md5 = 579618d56fe46acdb9bcfcff67808ae4
ffmpeg getFramesInReverseOrder(41): md5 = 579618d56fe46acdb9bcfcff67808ae4
ffmpeg getFramesInReverseOrder(40): md5 = 579618d56fe46acdb9bcfcff67808ae4
ffmpeg getFramesInReverseOrder(39): md5 = 4f9a4e239c4b9459a59b038b0be3d5df
ffmpeg getFramesInReverseOrder(38): md5 = 4f9a4e239c4b9459a59b038b0be3d5df
ffmpeg getFramesInReverseOrder(37): md5 = 4f9a4e239c4b9459a59b038b0be3d5df
ffmpeg getFramesInReverseOrder(36): md5 = 689ad71143a347f53417356eabb0037f
ffmpeg getFramesInReverseOrder(35): md5 = 689ad71143a347f53417356eabb0037f
ffmpeg getFramesInReverseOrder(34): md5 = 689ad71143a347f53417356eabb0037f
ffmpeg getFramesInReverseOrder(33): md5 = 9620a937f1a19c3d5e95716fae1eb47f
ffmpeg getFramesInReverseOrder(32): md5 = 9620a937f1a19c3d5e95716fae1eb47f
ffmpeg getFramesInReverseOrder(31): md5 = 9620a937f1a19c3d5e95716fae1eb47f
ffmpeg getFramesInReverseOrder(30): md5 = cbdbcebeea6ea45f6965a83543b6c44b
ffmpeg getFramesInReverseOrder(29): md5 = cbdbcebeea6ea45f6965a83543b6c44b
ffmpeg getFramesInReverseOrder(28): md5 = cbdbcebeea6ea45f6965a83543b6c44b
ffmpeg getFramesInReverseOrder(27): md5 = 405cc6f1453352460cf01875aa23ccff
ffmpeg getFramesInReverseOrder(26): md5 = 405cc6f1453352460cf01875aa23ccff
ffmpeg getFramesInReverseOrder(25): md5 = 405cc6f1453352460cf01875aa23ccff
ffmpeg getFramesInReverseOrder(24): md5 = 5af7473006c39343accad86b6f9cf6ed
ffmpeg getFramesInReverseOrder(23): md5 = 5af7473006c39343accad86b6f9cf6ed
ffmpeg getFramesInReverseOrder(22): md5 = 5af7473006c39343accad86b6f9cf6ed
ffmpeg getFramesInReverseOrder(21): md5 = dbcd63a3fe7bc6e5ae746134462a582d
ffmpeg getFramesInReverseOrder(20): md5 = dbcd63a3fe7bc6e5ae746134462a582d
ffmpeg getFramesInReverseOrder(19): md5 = dbcd63a3fe7bc6e5ae746134462a582d
ffmpeg getFramesInReverseOrder(18): md5 = 25fce65aaebf63d787415133ee525e0b
ffmpeg getFramesInReverseOrder(17): md5 = 25fce65aaebf63d787415133ee525e0b
ffmpeg getFramesInReverseOrder(16): md5 = 25fce65aaebf63d787415133ee525e0b
ffmpeg getFramesInReverseOrder(15): md5 = 73327939f7fc8b6080525dc259bdd136
ffmpeg getFramesInReverseOrder(14): md5 = 73327939f7fc8b6080525dc259bdd136
ffmpeg getFramesInReverseOrder(13): md5 = 73327939f7fc8b6080525dc259bdd136
ffmpeg getFramesInReverseOrder(12): md5 = 8de055e9eb38073ab35f75cfe4adae83
ffmpeg getFramesInReverseOrder(11): md5 = 8de055e9eb38073ab35f75cfe4adae83
ffmpeg getFramesInReverseOrder(10): md5 = 8de055e9eb38073ab35f75cfe4adae83
ffmpeg getFramesInReverseOrder(9): md5 = 0a7a900dc376afc5598d5b2ae50be442
ffmpeg getFramesInReverseOrder(8): md5 = 0a7a900dc376afc5598d5b2ae50be442
ffmpeg getFramesInReverseOrder(7): md5 = 0a7a900dc376afc5598d5b2ae50be442
ffmpeg getFramesInReverseOrder(6): md5 = bc3e96ad73e019583d449b6d2d857858
ffmpeg getFramesInReverseOrder(5): md5 = bc3e96ad73e019583d449b6d2d857858
ffmpeg getFramesInReverseOrder(4): md5 = bc3e96ad73e019583d449b6d2d857858
ffmpeg getFramesInReverseOrder(3): md5 = 054ca5377a0592ea15497bcfefa59181
ffmpeg getFramesInReverseOrder(2): md5 = 054ca5377a0592ea15497bcfefa59181
ffmpeg getFramesInReverseOrder(1): md5 = 054ca5377a0592ea15497bcfefa59181