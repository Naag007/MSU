<?php
 namespace Mgt\Waf\Model\Config\BackendModel; use Mgt\Waf\Model\Config\BackendModel\Value as ConfigValue; use Mgt\Waf\Model\Aws\Waf as AwsWaf; class BlockedBots extends ConfigValue { protected function _afterLoad() { goto dd7f4; C7f8c: $projectName = $this->getProjectName(); goto fe6c2; d9a8d: f7449: goto e1ad1; Bb6db: $value = $sessionConfigData["\147\x72\x6f\165\x70\x73"]["\x62\x6c\157\143\x6b\145\x64\x5f\x62\x6f\164\163"]["\146\x69\x65\154\144\x73"]["\x62\154\x6f\143\153\x65\x64\137\142\157\164\x73"]["\166\141\154\165\145"]; goto d9a8d; b999f: if (true === isset($sessionConfigData["\x67\162\157\165\x70\163"]["\x62\154\x6f\x63\x6b\145\144\x5f\x62\157\x74\x73"]["\146\x69\145\154\144\x73"]["\x62\154\157\143\153\145\144\x5f\x62\157\x74\163"]["\x76\141\x6c\165\145"])) { goto e5103; } goto A3292; Fde5d: d3ad8: goto e47d9; cc31f: $blockedBots = $awsWaf->getBlockedBots(); goto D1ac4; F4e66: $value = implode(PHP_EOL, $bots); goto Fde5d; e1ad1: $this->setValue($value); goto B9eaf; C8ce9: $awsSecretAccessKey = $this->getAwsSecretAccessKey(); goto A3258; d29f7: $bots = []; goto cc31f; A3258: $awsRegion = $this->getAwsRegion(); goto Cb7d7; D1ac4: foreach ($blockedBots as $bot) { goto d3d55; B0532: aa1c0: goto E2361; d3d55: if (!($bot != "\x6d\147\x74")) { goto C0541; } goto a05ab; a05ab: $bots[] = $bot; goto a379a; a379a: C0541: goto B0532; E2361: } goto e01be; E5cd8: $value = ''; goto b999f; A1a3f: e5103: goto Bb6db; dd7f4: $sessionConfigData = $this->getSessionConfigData(); goto E5cd8; fe6c2: if (!(false === empty($awsAccessKey) && false === empty($projectName))) { goto d3ad8; } goto C8ce9; A3292: $awsAccessKey = $this->getAwsAccessKey(); goto C7f8c; e47d9: goto f7449; goto A1a3f; Cb7d7: $awsWaf = new AwsWaf($awsAccessKey, $awsSecretAccessKey, $awsRegion, $projectName); goto d29f7; e01be: b1506: goto F4e66; B9eaf: } }