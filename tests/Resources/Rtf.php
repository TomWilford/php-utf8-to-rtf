<?php

namespace Resources;

trait Rtf
{
    public string $rtfStart = '{\rtf1\adeflang1025\ansi\ansicpg1252\uc1\adeff31507\deff0\stshfdbch31506\stshfloch31506\stshfhich31506\stshfbi31507\deflang2057\deflangfe2057\themelang2057\themelangfe0\themelangcs0{\fonttbl{\f0\fbidi \froman\fcharset0\fprq2{\*\panose 02020603050405020304}Times New Roman;}{\f34\fbidi \froman\fcharset0\fprq2{\*\panose 02040503050406030204}Cambria Math;}
{\f37\fbidi \fswiss\fcharset0\fprq2{\*\panose 020f0502020204030204}Calibri;}{\flomajor\f31500\fbidi \froman\fcharset0\fprq2{\*\panose 02020603050405020304}Times New Roman;}
{\fdbmajor\f31501\fbidi \froman\fcharset0\fprq2{\*\panose 02020603050405020304}Times New Roman;}{\fhimajor\f31502\fbidi \fswiss\fcharset0\fprq2{\*\panose 020f0302020204030204}Calibri Light;}
{\fbimajor\f31503\fbidi \froman\fcharset0\fprq2{\*\panose 02020603050405020304}Times New Roman;}{\flominor\f31504\fbidi \froman\fcharset0\fprq2{\*\panose 02020603050405020304}Times New Roman;}
{\fdbminor\f31505\fbidi \froman\fcharset0\fprq2{\*\panose 02020603050405020304}Times New Roman;}{\fhiminor\f31506\fbidi \fswiss\fcharset0\fprq2{\*\panose 020f0502020204030204}Calibri;}
{\fbiminor\f31507\fbidi \froman\fcharset0\fprq2{\*\panose 02020603050405020304}Times New Roman;}{\f44\fbidi \froman\fcharset238\fprq2 Times New Roman CE;}{\f45\fbidi \froman\fcharset204\fprq2 Times New Roman Cyr;}
{\f47\fbidi \froman\fcharset161\fprq2 Times New Roman Greek;}{\f48\fbidi \froman\fcharset162\fprq2 Times New Roman Tur;}{\f49\fbidi \froman\fcharset177\fprq2 Times New Roman (Hebrew);}{\f50\fbidi \froman\fcharset178\fprq2 Times New Roman (Arabic);}
{\f51\fbidi \froman\fcharset186\fprq2 Times New Roman Baltic;}{\f52\fbidi \froman\fcharset163\fprq2 Times New Roman (Vietnamese);}{\f414\fbidi \fswiss\fcharset238\fprq2 Calibri CE;}{\f415\fbidi \fswiss\fcharset204\fprq2 Calibri Cyr;}
{\f417\fbidi \fswiss\fcharset161\fprq2 Calibri Greek;}{\f418\fbidi \fswiss\fcharset162\fprq2 Calibri Tur;}{\f419\fbidi \fswiss\fcharset177\fprq2 Calibri (Hebrew);}{\f420\fbidi \fswiss\fcharset178\fprq2 Calibri (Arabic);}
{\f421\fbidi \fswiss\fcharset186\fprq2 Calibri Baltic;}{\f422\fbidi \fswiss\fcharset163\fprq2 Calibri (Vietnamese);}{\flomajor\f31508\fbidi \froman\fcharset238\fprq2 Times New Roman CE;}
{\flomajor\f31509\fbidi \froman\fcharset204\fprq2 Times New Roman Cyr;}{\flomajor\f31511\fbidi \froman\fcharset161\fprq2 Times New Roman Greek;}{\flomajor\f31512\fbidi \froman\fcharset162\fprq2 Times New Roman Tur;}
{\flomajor\f31513\fbidi \froman\fcharset177\fprq2 Times New Roman (Hebrew);}{\flomajor\f31514\fbidi \froman\fcharset178\fprq2 Times New Roman (Arabic);}{\flomajor\f31515\fbidi \froman\fcharset186\fprq2 Times New Roman Baltic;}
{\flomajor\f31516\fbidi \froman\fcharset163\fprq2 Times New Roman (Vietnamese);}{\fdbmajor\f31518\fbidi \froman\fcharset238\fprq2 Times New Roman CE;}{\fdbmajor\f31519\fbidi \froman\fcharset204\fprq2 Times New Roman Cyr;}
{\fdbmajor\f31521\fbidi \froman\fcharset161\fprq2 Times New Roman Greek;}{\fdbmajor\f31522\fbidi \froman\fcharset162\fprq2 Times New Roman Tur;}{\fdbmajor\f31523\fbidi \froman\fcharset177\fprq2 Times New Roman (Hebrew);}
{\fdbmajor\f31524\fbidi \froman\fcharset178\fprq2 Times New Roman (Arabic);}{\fdbmajor\f31525\fbidi \froman\fcharset186\fprq2 Times New Roman Baltic;}{\fdbmajor\f31526\fbidi \froman\fcharset163\fprq2 Times New Roman (Vietnamese);}
{\fhimajor\f31528\fbidi \fswiss\fcharset238\fprq2 Calibri Light CE;}{\fhimajor\f31529\fbidi \fswiss\fcharset204\fprq2 Calibri Light Cyr;}{\fhimajor\f31531\fbidi \fswiss\fcharset161\fprq2 Calibri Light Greek;}
{\fhimajor\f31532\fbidi \fswiss\fcharset162\fprq2 Calibri Light Tur;}{\fhimajor\f31533\fbidi \fswiss\fcharset177\fprq2 Calibri Light (Hebrew);}{\fhimajor\f31534\fbidi \fswiss\fcharset178\fprq2 Calibri Light (Arabic);}
{\fhimajor\f31535\fbidi \fswiss\fcharset186\fprq2 Calibri Light Baltic;}{\fhimajor\f31536\fbidi \fswiss\fcharset163\fprq2 Calibri Light (Vietnamese);}{\fbimajor\f31538\fbidi \froman\fcharset238\fprq2 Times New Roman CE;}
{\fbimajor\f31539\fbidi \froman\fcharset204\fprq2 Times New Roman Cyr;}{\fbimajor\f31541\fbidi \froman\fcharset161\fprq2 Times New Roman Greek;}{\fbimajor\f31542\fbidi \froman\fcharset162\fprq2 Times New Roman Tur;}
{\fbimajor\f31543\fbidi \froman\fcharset177\fprq2 Times New Roman (Hebrew);}{\fbimajor\f31544\fbidi \froman\fcharset178\fprq2 Times New Roman (Arabic);}{\fbimajor\f31545\fbidi \froman\fcharset186\fprq2 Times New Roman Baltic;}
{\fbimajor\f31546\fbidi \froman\fcharset163\fprq2 Times New Roman (Vietnamese);}{\flominor\f31548\fbidi \froman\fcharset238\fprq2 Times New Roman CE;}{\flominor\f31549\fbidi \froman\fcharset204\fprq2 Times New Roman Cyr;}
{\flominor\f31551\fbidi \froman\fcharset161\fprq2 Times New Roman Greek;}{\flominor\f31552\fbidi \froman\fcharset162\fprq2 Times New Roman Tur;}{\flominor\f31553\fbidi \froman\fcharset177\fprq2 Times New Roman (Hebrew);}
{\flominor\f31554\fbidi \froman\fcharset178\fprq2 Times New Roman (Arabic);}{\flominor\f31555\fbidi \froman\fcharset186\fprq2 Times New Roman Baltic;}{\flominor\f31556\fbidi \froman\fcharset163\fprq2 Times New Roman (Vietnamese);}
{\fdbminor\f31558\fbidi \froman\fcharset238\fprq2 Times New Roman CE;}{\fdbminor\f31559\fbidi \froman\fcharset204\fprq2 Times New Roman Cyr;}{\fdbminor\f31561\fbidi \froman\fcharset161\fprq2 Times New Roman Greek;}
{\fdbminor\f31562\fbidi \froman\fcharset162\fprq2 Times New Roman Tur;}{\fdbminor\f31563\fbidi \froman\fcharset177\fprq2 Times New Roman (Hebrew);}{\fdbminor\f31564\fbidi \froman\fcharset178\fprq2 Times New Roman (Arabic);}
{\fdbminor\f31565\fbidi \froman\fcharset186\fprq2 Times New Roman Baltic;}{\fdbminor\f31566\fbidi \froman\fcharset163\fprq2 Times New Roman (Vietnamese);}{\fhiminor\f31568\fbidi \fswiss\fcharset238\fprq2 Calibri CE;}
{\fhiminor\f31569\fbidi \fswiss\fcharset204\fprq2 Calibri Cyr;}{\fhiminor\f31571\fbidi \fswiss\fcharset161\fprq2 Calibri Greek;}{\fhiminor\f31572\fbidi \fswiss\fcharset162\fprq2 Calibri Tur;}
{\fhiminor\f31573\fbidi \fswiss\fcharset177\fprq2 Calibri (Hebrew);}{\fhiminor\f31574\fbidi \fswiss\fcharset178\fprq2 Calibri (Arabic);}{\fhiminor\f31575\fbidi \fswiss\fcharset186\fprq2 Calibri Baltic;}
{\fhiminor\f31576\fbidi \fswiss\fcharset163\fprq2 Calibri (Vietnamese);}{\fbiminor\f31578\fbidi \froman\fcharset238\fprq2 Times New Roman CE;}{\fbiminor\f31579\fbidi \froman\fcharset204\fprq2 Times New Roman Cyr;}
{\fbiminor\f31581\fbidi \froman\fcharset161\fprq2 Times New Roman Greek;}{\fbiminor\f31582\fbidi \froman\fcharset162\fprq2 Times New Roman Tur;}{\fbiminor\f31583\fbidi \froman\fcharset177\fprq2 Times New Roman (Hebrew);}
{\fbiminor\f31584\fbidi \froman\fcharset178\fprq2 Times New Roman (Arabic);}{\fbiminor\f31585\fbidi \froman\fcharset186\fprq2 Times New Roman Baltic;}{\fbiminor\f31586\fbidi \froman\fcharset163\fprq2 Times New Roman (Vietnamese);}}
{\colortbl;\red0\green0\blue0;\red0\green0\blue255;\red0\green255\blue255;\red0\green255\blue0;\red255\green0\blue255;\red255\green0\blue0;\red255\green255\blue0;\red255\green255\blue255;\red0\green0\blue128;\red0\green128\blue128;\red0\green128\blue0;
\red128\green0\blue128;\red128\green0\blue0;\red128\green128\blue0;\red128\green128\blue128;\red192\green192\blue192;\red0\green0\blue0;\red0\green0\blue0;}{\*\defchp \f31506\fs22\lang2057\langfe1033\langfenp1033 }{\*\defpap 
\ql \li0\ri0\sa160\sl259\slmult1\widctlpar\wrapdefault\aspalpha\aspnum\faauto\adjustright\rin0\lin0\itap0 }\noqfpromote {\stylesheet{\ql \li0\ri0\sa160\sl259\slmult1\widctlpar\wrapdefault\aspalpha\aspnum\faauto\adjustright\rin0\lin0\itap0 \rtlch\fcs1 
\af31507\afs22\alang1025 \ltrch\fcs0 \f31506\fs22\lang2057\langfe1033\cgrid\langnp2057\langfenp1033 \snext0 \sqformat \spriority0 Normal;}{\*\cs10 \additive \ssemihidden \sunhideused \spriority1 Default Paragraph Font;}{\*
\ts11\tsrowd\trftsWidthB3\trpaddl108\trpaddr108\trpaddfl3\trpaddft3\trpaddfb3\trpaddfr3\trcbpat1\trcfpat1\tblind0\tblindtype3\tsvertalt\tsbrdrt\tsbrdrl\tsbrdrb\tsbrdrr\tsbrdrdgl\tsbrdrdgr\tsbrdrh\tsbrdrv \ql \li0\ri0\sa160\sl259\slmult1
\widctlpar\wrapdefault\aspalpha\aspnum\faauto\adjustright\rin0\lin0\itap0 \rtlch\fcs1 \af31507\afs22\alang1025 \ltrch\fcs0 \f31506\fs22\lang2057\langfe1033\cgrid\langnp2057\langfenp1033 \snext11 \ssemihidden \sunhideused Normal Table;}}{\*\pgptbl {\pgp
\ipgp0\itap0\li0\ri0\sb0\sa0}}{\*\rsidtbl \rsid1052396\rsid3220871\rsid12286983\rsid13596869}{\mmathPr\mmathFont34\mbrkBin0\mbrkBinSub0\msmallFrac0\mdispDef1\mlMargin0\mrMargin0\mdefJc1\mwrapIndent1440\mintLim0\mnaryLim1}{\info{\author Tom Wilford}
{\operator Tom Wilford}{\creatim\yr2022\mo12\dy16\hr15\min31}{\revtim\yr2022\mo12\dy16\hr15\min32}{\version1}{\edmins1}{\nofpages1}{\nofwords12}{\nofchars75}{\nofcharsws86}{\vern61}}{\*\xmlnstbl {\xmlns1 http://schemas.microsoft.com/office/word/2003/wordm
l}}\paperw11906\paperh16838\margl1440\margr1440\margt1440\margb1440\gutter0\ltrsect 
\widowctrl\ftnbj\aenddoc\trackmoves0\trackformatting1\donotembedsysfont1\relyonvml0\donotembedlingdata0\grfdocevents0\validatexml1\showplaceholdtext0\ignoremixedcontent0\saveinvalidxml0\showxmlerrors1\noxlattoyen
\expshrtn\noultrlspc\dntblnsbdb\nospaceforul\formshade\horzdoc\dgmargin\dghspace180\dgvspace180\dghorigin1440\dgvorigin1440\dghshow1\dgvshow1
\jexpand\viewkind1\viewscale90\pgbrdrhead\pgbrdrfoot\splytwnine\ftnlytwnine\htmautsp\nolnhtadjtbl\useltbaln\alntblind\lytcalctblwd\lyttblrtgr\lnbrkrule\nobrkwrptbl\snaptogridincell\allowfieldendsel\wrppunct
\asianbrkrule\rsidroot12286983\newtblstyruls\nogrowautofit\usenormstyforlist\noindnmbrts\felnbrelev\nocxsptable\indrlsweleven\noafcnsttbl\afelev\utinl\hwelev\spltpgpar\notcvasp\notbrkcnstfrctbl\notvatxbx\krnprsnet\cachedcolbal \nouicompat \fet0
{\*\wgrffmtfilter 2450}\nofeaturethrottle1\ilfomacatclnup0\ltrpar \sectd \ltrsect\linex0\headery708\footery708\colsx708\endnhere\sectlinegrid360\sectdefaultcl\sftnbj {\*\pnseclvl1\pnucrm\pnstart1\pnindent720\pnhang {\pntxta .}}{\*\pnseclvl2
\pnucltr\pnstart1\pnindent720\pnhang {\pntxta .}}{\*\pnseclvl3\pndec\pnstart1\pnindent720\pnhang {\pntxta .}}{\*\pnseclvl4\pnlcltr\pnstart1\pnindent720\pnhang {\pntxta )}}{\*\pnseclvl5\pndec\pnstart1\pnindent720\pnhang {\pntxtb (}{\pntxta )}}{\*\pnseclvl6
\pnlcltr\pnstart1\pnindent720\pnhang {\pntxtb (}{\pntxta )}}{\*\pnseclvl7\pnlcrm\pnstart1\pnindent720\pnhang {\pntxtb (}{\pntxta )}}{\*\pnseclvl8\pnlcltr\pnstart1\pnindent720\pnhang {\pntxtb (}{\pntxta )}}{\*\pnseclvl9\pnlcrm\pnstart1\pnindent720\pnhang 
{\pntxtb (}{\pntxta )}}\pard\plain \ltrpar\ql \li0\ri0\sa160\sl259\slmult1\widctlpar\wrapdefault\aspalpha\aspnum\faauto\adjustright\rin0\lin0\itap0 \rtlch\fcs1 \af31507\afs22\alang1025 \ltrch\fcs0 
\f31506\fs22\lang2057\langfe1033\cgrid\langnp2057\langfenp1033 {\rtlch\fcs1 \af31507 \ltrch\fcs0 \insrsid12286983\charrsid12286983 test }{\rtlch\fcs1 \af31507 \ltrch\fcs0 \f31574\insrsid12286983\charrsid12286983 \'e4\'d5}{\rtlch\fcs1 \af31507 \ltrch\fcs0 
\insrsid12286983\charrsid12286983  }';
    public string $rtfEnd = '{\*\themedata 504b030414000600080000002100e9de0fbfff0000001c020000130000005b436f6e74656e745f54797065735d2e786d6cac91cb4ec3301045f748fc83e52d4a
9cb2400825e982c78ec7a27cc0c8992416c9d8b2a755fbf74cd25442a820166c2cd933f79e3be372bd1f07b5c3989ca74aaff2422b24eb1b475da5df374fd9ad
5689811a183c61a50f98f4babebc2837878049899a52a57be670674cb23d8e90721f90a4d2fa3802cb35762680fd800ecd7551dc18eb899138e3c943d7e503b6
b01d583deee5f99824e290b4ba3f364eac4a430883b3c092d4eca8f946c916422ecab927f52ea42b89a1cd59c254f919b0e85e6535d135a8de20f20b8c12c3b0
0c895fcf6720192de6bf3b9e89ecdbd6596cbcdd8eb28e7c365ecc4ec1ff1460f53fe813d3cc7f5b7f020000ffff0300504b030414000600080000002100a5d6
a7e7c0000000360100000b0000005f72656c732f2e72656c73848fcf6ac3300c87ef85bd83d17d51d2c31825762fa590432fa37d00e1287f68221bdb1bebdb4f
c7060abb0884a4eff7a93dfeae8bf9e194e720169aaa06c3e2433fcb68e1763dbf7f82c985a4a725085b787086a37bdbb55fbc50d1a33ccd311ba548b6309512
0f88d94fbc52ae4264d1c910d24a45db3462247fa791715fd71f989e19e0364cd3f51652d73760ae8fa8c9ffb3c330cc9e4fc17faf2ce545046e37944c69e462
a1a82fe353bd90a865aad41ed0b5b8f9d6fd010000ffff0300504b0304140006000800000021006b799616830000008a0000001c0000007468656d652f746865
6d652f7468656d654d616e616765722e786d6c0ccc4d0ac3201040e17da17790d93763bb284562b2cbaebbf600439c1a41c7a0d29fdbd7e5e38337cedf14d59b
4b0d592c9c070d8a65cd2e88b7f07c2ca71ba8da481cc52c6ce1c715e6e97818c9b48d13df49c873517d23d59085adb5dd20d6b52bd521ef2cdd5eb9246a3d8b
4757e8d3f729e245eb2b260a0238fd010000ffff0300504b030414000600080000002100b6f4679893070000c9200000160000007468656d652f7468656d652f
7468656d65312e786d6cec59cd8b1bc915bf07f23f347d97f5d5ad8fc1f2a24fcfda33b6b164873dd648a5eef2547789aad28cc56208de532e81c026e49085bd
ed21842cecc22eb9e48f31d8249b3f22afaa5bdd5552c99e191c3061463074977eefd5afde7bf5de53d5ddcf5e26d4bbc05c1096f6fcfa9d9aefe174ce16248d
7afeb3d9a4d2f13d2151ba4094a5b8e76fb0f03fbbf7eb5fdd454732c609f6403e1547a8e7c752ae8eaa5531876124eeb0154ee1bb25e30992f0caa3ea82a34b
d09bd06aa3566b55134452df4b51026a1f2f97648ebd9952e9dfdb2a1f53784da5500373caa74a35b6243476715e5708b11143cabd0b447b3eccb3609733fc52
fa1e4542c2173dbfa6fffceabdbb5574940b517940d6909be8bf5c2e17589c37f49c3c3a2b260d823068f50bfd1a40e53e6edc1eb7c6ad429f06a0f91c569a71
b175b61bc320c71aa0ecd1a17bd41e35eb16ded0dfdce3dc0fd5c7c26b50a63fd8c34f2643b0a285d7a00c1feee1c3417730b2f56b50866fede1dbb5fe28685b
fa3528a6243ddf43d7c25673b85d6d0159327aec8477c360d26ee4ca4b144443115d6a8a254be5a1584bd00bc6270050408a24493db959e1259a43140f112567
9c7827248a21f056286502866b8ddaa4d684ffea13e827ed5174849121ad780113b137a4f87862cec94af6fc07a0d537206f7ffef9cdeb1fdfbcfee9cd575fbd
79fdf77c6eadca923b466964cafdf2dd1ffef3cd6fbd7ffff0ed2f5fff319b7a172f4cfcbbbffdeedd3ffef93ef5b0e2d2146ffff4fdbb1fbf7ffbe7dfffebaf
5f3bb4f7393a33e1339260e13dc297de5396c0021dfcf119bf9ec42c46c494e8a791402952b338f48f656ca11f6d10450edc00db767cce21d5b880f7d72f2cc2
d398af2571687c182716f094313a60dc6985876a2ec3ccb3751ab927e76b13f714a10bd7dc43945a5e1eaf579063894be530c616cd2714a5124538c5d253dfb1
738c1dabfb8210cbaea764ce99604be97d41bc01224e93ccc899154da5d03149c02f1b1741f0b7659bd3e7de8051d7aa47f8c246c2de40d4417e86a965c6fb68
2d51e252394309350d7e8264ec2239ddf0b9891b0b099e8e3065de78818570c93ce6b05ec3e90f21cdb8dd7e4a37898de4929cbb749e20c64ce4889d0f6394ac
5cd829496313fbb938871045de13265df05366ef10f50e7e40e941773f27d872f787b3c133c8b026a53240d4376beef0e57dccacf89d6ee8126157aae9f3c44a
b17d4e9cd131584756689f604cd1255a60ec3dfbdcc160c05696cd4bd20f62c82ac7d815580f901dabea3dc5027a25d5dcece7c91322ac909de2881de073bad9
493c1b9426881fd2fc08bc6eda7c0ca52e7105c0633a3f37818f08f480102f4ea33c16a0c308ee835a9fc4c82a60ea5db8e375c32dff5d658fc1be7c61d1b8c2
be04197c6d1948eca6cc7b6d3343d49aa00c9819822ec3956e41c4727f29a28aab165b3be596f6a62ddd00dd91d5f42424fd6007b4d3fb84ffbbde073a8cb77f
f9c6b10f3e4ebfe3566c25ab6b763a8792c9f14e7f7308b7dbd50c195f904fbfa919a175fa04431dd9cf58b73dcd6d4fe3ffdff73487f6f36d2773a8dfb8ed64
7ce8306e3b99fc70e5e3743265f3027d8d3af0c80e7af4b14f72f0d46749289dca0dc527421ffc08f83db398c0a092d3279eb838055cc5f0a8ca1c4c60e1228e
b48cc799fc0d91f134462b381daafb4a492472d591f0564cc0a1911e76ea5678ba4e4ed9223becacd7d5c16656590592e5782d2cc6e1a04a66e856bb3cc02bd4
6bb6913e68dd1250b2d721614c6693683a48b4b783ca48fa58178ce620a157f65158741d2c3a4afdd6557b2c805ae115f8c1edc1cff49e1f06200242701e07cd
f942f92973f5d6bbda991fd3d3878c69450034d8db08283ddd555c0f2e4fad2e0bb52b78da2261849b4d425b46377822869fc17974aad1abd0b8aeafbba54b2d
7aca147a3e08ad9246bbf33e1637f535c8ede6069a9a9982a6de65cf6f35430899395af5fc251c1ac363b282d811ea3717a211dcbccc25cf36fc4d32cb8a0b39
4222ce0cae934e960d122231f728497abe5a7ee1069aea1ca2b9d51b90103e59725d482b9f1a3970baed64bc5ce2b934dd6e8c284b67af90e1b35ce1fc568bdf
1cac24d91adc3d8d1797de195df3a708422c6cd795011744c0dd413db3e682c0655891c8caf8db294c79da356fa3740c65e388ae62945714339967709dca0b3a
faadb081f196af190c6a98242f8467912ab0a651ad6a5a548d8cc3c1aafb6121653923699635d3ca2aaa6abab39835c3b60cecd8f26645de60b53531e434b3c2
67a97b37e576b7b96ea74f28aa0418bcb09fa3ea5ea12018d4cac92c6a8af17e1a56393b1fb56bc776811fa07695226164fdd656ed8edd8a1ae19c0e066f54f9
416e376a6168b9ed2bb5a5f5adb979b1cdce5e40f2184197bba6526857c2c92e47d0104d754f92a50dd8222f65be35e0c95b73d2f3bfac85fd60d80887955a27
1c57826650ab74c27eb3d20fc3667d1cd66ba341e31514161927f530bbb19fc00506dde4f7f67a7cefee3ed9ded1dc99b3a4caf4dd7c5513d777f7f5c6e1bb7b
8f40d2f9b2d598749bdd41abd26df627956034e854bac3d6a0326a0ddba3c9681876ba9357be77a1c141bf390c5ae34ea5551f0e2b41aba6e877ba9576d068f4
8376bf330efaaff23606569ea58fdc16605ecdebde7f010000ffff0300504b0304140006000800000021000dd1909fb60000001b010000270000007468656d65
2f7468656d652f5f72656c732f7468656d654d616e616765722e786d6c2e72656c73848f4d0ac2301484f78277086f6fd3ba109126dd88d0add40384e4350d36
3f2451eced0dae2c082e8761be9969bb979dc9136332de3168aa1a083ae995719ac16db8ec8e4052164e89d93b64b060828e6f37ed1567914b284d262452282e
3198720e274a939cd08a54f980ae38a38f56e422a3a641c8bbd048f7757da0f19b017cc524bd62107bd5001996509affb3fd381a89672f1f165dfe514173d985
0528a2c6cce0239baa4c04ca5bbabac4df000000ffff0300504b01022d0014000600080000002100e9de0fbfff0000001c020000130000000000000000000000
0000000000005b436f6e74656e745f54797065735d2e786d6c504b01022d0014000600080000002100a5d6a7e7c0000000360100000b00000000000000000000
000000300100005f72656c732f2e72656c73504b01022d00140006000800000021006b799616830000008a0000001c0000000000000000000000000019020000
7468656d652f7468656d652f7468656d654d616e616765722e786d6c504b01022d0014000600080000002100b6f4679893070000c92000001600000000000000
000000000000d60200007468656d652f7468656d652f7468656d65312e786d6c504b01022d00140006000800000021000dd1909fb60000001b01000027000000
000000000000000000009d0a00007468656d652f7468656d652f5f72656c732f7468656d654d616e616765722e786d6c2e72656c73504b050600000000050005005d010000980b00000000}
{\*\colorschememapping 3c3f786d6c2076657273696f6e3d22312e302220656e636f64696e673d225554462d3822207374616e64616c6f6e653d22796573223f3e0d0a3c613a636c724d
617020786d6c6e733a613d22687474703a2f2f736368656d61732e6f70656e786d6c666f726d6174732e6f72672f64726177696e676d6c2f323030362f6d6169
6e22206267313d226c743122207478313d22646b3122206267323d226c743222207478323d22646b322220616363656e74313d22616363656e74312220616363
656e74323d22616363656e74322220616363656e74333d22616363656e74332220616363656e74343d22616363656e74342220616363656e74353d22616363656e74352220616363656e74363d22616363656e74362220686c696e6b3d22686c696e6b2220666f6c486c696e6b3d22666f6c486c696e6b222f3e}
{\*\latentstyles\lsdstimax376\lsdlockeddef0\lsdsemihiddendef0\lsdunhideuseddef0\lsdqformatdef0\lsdprioritydef99{\lsdlockedexcept \lsdqformat1 \lsdpriority0 \lsdlocked0 Normal;\lsdqformat1 \lsdpriority9 \lsdlocked0 heading 1;
\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority9 \lsdlocked0 heading 2;\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority9 \lsdlocked0 heading 3;\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority9 \lsdlocked0 heading 4;
\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority9 \lsdlocked0 heading 5;\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority9 \lsdlocked0 heading 6;\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority9 \lsdlocked0 heading 7;
\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority9 \lsdlocked0 heading 8;\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority9 \lsdlocked0 heading 9;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 1;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 4;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 5;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 6;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 7;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 8;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index 9;
\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 1;\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 2;\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 3;
\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 4;\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 5;\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 6;
\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 7;\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 8;\lsdsemihidden1 \lsdunhideused1 \lsdpriority39 \lsdlocked0 toc 9;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Normal Indent;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 footnote text;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 annotation text;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 header;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 footer;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 index heading;\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority35 \lsdlocked0 caption;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 table of figures;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 envelope address;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 envelope return;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 footnote reference;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 annotation reference;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 line number;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 page number;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 endnote reference;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 endnote text;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 table of authorities;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 macro;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 toa heading;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Bullet;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Number;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List 3;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List 4;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List 5;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Bullet 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Bullet 3;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Bullet 4;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Bullet 5;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Number 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Number 3;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Number 4;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Number 5;\lsdqformat1 \lsdpriority10 \lsdlocked0 Title;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Closing;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Signature;\lsdsemihidden1 \lsdunhideused1 \lsdpriority1 \lsdlocked0 Default Paragraph Font;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Body Text;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Body Text Indent;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Continue;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Continue 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Continue 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Continue 4;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 List Continue 5;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Message Header;\lsdqformat1 \lsdpriority11 \lsdlocked0 Subtitle;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Salutation;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Date;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Body Text First Indent;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Body Text First Indent 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Note Heading;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Body Text 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Body Text 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Body Text Indent 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Body Text Indent 3;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Block Text;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Hyperlink;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 FollowedHyperlink;\lsdqformat1 \lsdpriority22 \lsdlocked0 Strong;
\lsdqformat1 \lsdpriority20 \lsdlocked0 Emphasis;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Document Map;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Plain Text;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 E-mail Signature;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Top of Form;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Bottom of Form;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Normal (Web);\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Acronym;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Address;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Cite;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Code;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Definition;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Keyboard;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Preformatted;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Sample;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Typewriter;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 HTML Variable;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Normal Table;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 annotation subject;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 No List;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Outline List 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Outline List 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Outline List 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Simple 1;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Simple 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Simple 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Classic 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Classic 2;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Classic 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Classic 4;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Colorful 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Colorful 2;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Colorful 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Columns 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Columns 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Columns 3;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Columns 4;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Columns 5;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Grid 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Grid 2;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Grid 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Grid 4;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Grid 5;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Grid 6;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Grid 7;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Grid 8;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table List 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table List 2;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table List 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table List 4;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table List 5;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table List 6;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table List 7;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table List 8;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table 3D effects 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table 3D effects 2;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table 3D effects 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Contemporary;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Elegant;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Professional;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Subtle 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Subtle 2;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Web 1;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Web 2;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Web 3;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Balloon Text;\lsdpriority39 \lsdlocked0 Table Grid;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Table Theme;\lsdsemihidden1 \lsdlocked0 Placeholder Text;
\lsdqformat1 \lsdpriority1 \lsdlocked0 No Spacing;\lsdpriority60 \lsdlocked0 Light Shading;\lsdpriority61 \lsdlocked0 Light List;\lsdpriority62 \lsdlocked0 Light Grid;\lsdpriority63 \lsdlocked0 Medium Shading 1;\lsdpriority64 \lsdlocked0 Medium Shading 2;
\lsdpriority65 \lsdlocked0 Medium List 1;\lsdpriority66 \lsdlocked0 Medium List 2;\lsdpriority67 \lsdlocked0 Medium Grid 1;\lsdpriority68 \lsdlocked0 Medium Grid 2;\lsdpriority69 \lsdlocked0 Medium Grid 3;\lsdpriority70 \lsdlocked0 Dark List;
\lsdpriority71 \lsdlocked0 Colorful Shading;\lsdpriority72 \lsdlocked0 Colorful List;\lsdpriority73 \lsdlocked0 Colorful Grid;\lsdpriority60 \lsdlocked0 Light Shading Accent 1;\lsdpriority61 \lsdlocked0 Light List Accent 1;
\lsdpriority62 \lsdlocked0 Light Grid Accent 1;\lsdpriority63 \lsdlocked0 Medium Shading 1 Accent 1;\lsdpriority64 \lsdlocked0 Medium Shading 2 Accent 1;\lsdpriority65 \lsdlocked0 Medium List 1 Accent 1;\lsdsemihidden1 \lsdlocked0 Revision;
\lsdqformat1 \lsdpriority34 \lsdlocked0 List Paragraph;\lsdqformat1 \lsdpriority29 \lsdlocked0 Quote;\lsdqformat1 \lsdpriority30 \lsdlocked0 Intense Quote;\lsdpriority66 \lsdlocked0 Medium List 2 Accent 1;\lsdpriority67 \lsdlocked0 Medium Grid 1 Accent 1;
\lsdpriority68 \lsdlocked0 Medium Grid 2 Accent 1;\lsdpriority69 \lsdlocked0 Medium Grid 3 Accent 1;\lsdpriority70 \lsdlocked0 Dark List Accent 1;\lsdpriority71 \lsdlocked0 Colorful Shading Accent 1;\lsdpriority72 \lsdlocked0 Colorful List Accent 1;
\lsdpriority73 \lsdlocked0 Colorful Grid Accent 1;\lsdpriority60 \lsdlocked0 Light Shading Accent 2;\lsdpriority61 \lsdlocked0 Light List Accent 2;\lsdpriority62 \lsdlocked0 Light Grid Accent 2;\lsdpriority63 \lsdlocked0 Medium Shading 1 Accent 2;
\lsdpriority64 \lsdlocked0 Medium Shading 2 Accent 2;\lsdpriority65 \lsdlocked0 Medium List 1 Accent 2;\lsdpriority66 \lsdlocked0 Medium List 2 Accent 2;\lsdpriority67 \lsdlocked0 Medium Grid 1 Accent 2;\lsdpriority68 \lsdlocked0 Medium Grid 2 Accent 2;
\lsdpriority69 \lsdlocked0 Medium Grid 3 Accent 2;\lsdpriority70 \lsdlocked0 Dark List Accent 2;\lsdpriority71 \lsdlocked0 Colorful Shading Accent 2;\lsdpriority72 \lsdlocked0 Colorful List Accent 2;\lsdpriority73 \lsdlocked0 Colorful Grid Accent 2;
\lsdpriority60 \lsdlocked0 Light Shading Accent 3;\lsdpriority61 \lsdlocked0 Light List Accent 3;\lsdpriority62 \lsdlocked0 Light Grid Accent 3;\lsdpriority63 \lsdlocked0 Medium Shading 1 Accent 3;\lsdpriority64 \lsdlocked0 Medium Shading 2 Accent 3;
\lsdpriority65 \lsdlocked0 Medium List 1 Accent 3;\lsdpriority66 \lsdlocked0 Medium List 2 Accent 3;\lsdpriority67 \lsdlocked0 Medium Grid 1 Accent 3;\lsdpriority68 \lsdlocked0 Medium Grid 2 Accent 3;\lsdpriority69 \lsdlocked0 Medium Grid 3 Accent 3;
\lsdpriority70 \lsdlocked0 Dark List Accent 3;\lsdpriority71 \lsdlocked0 Colorful Shading Accent 3;\lsdpriority72 \lsdlocked0 Colorful List Accent 3;\lsdpriority73 \lsdlocked0 Colorful Grid Accent 3;\lsdpriority60 \lsdlocked0 Light Shading Accent 4;
\lsdpriority61 \lsdlocked0 Light List Accent 4;\lsdpriority62 \lsdlocked0 Light Grid Accent 4;\lsdpriority63 \lsdlocked0 Medium Shading 1 Accent 4;\lsdpriority64 \lsdlocked0 Medium Shading 2 Accent 4;\lsdpriority65 \lsdlocked0 Medium List 1 Accent 4;
\lsdpriority66 \lsdlocked0 Medium List 2 Accent 4;\lsdpriority67 \lsdlocked0 Medium Grid 1 Accent 4;\lsdpriority68 \lsdlocked0 Medium Grid 2 Accent 4;\lsdpriority69 \lsdlocked0 Medium Grid 3 Accent 4;\lsdpriority70 \lsdlocked0 Dark List Accent 4;
\lsdpriority71 \lsdlocked0 Colorful Shading Accent 4;\lsdpriority72 \lsdlocked0 Colorful List Accent 4;\lsdpriority73 \lsdlocked0 Colorful Grid Accent 4;\lsdpriority60 \lsdlocked0 Light Shading Accent 5;\lsdpriority61 \lsdlocked0 Light List Accent 5;
\lsdpriority62 \lsdlocked0 Light Grid Accent 5;\lsdpriority63 \lsdlocked0 Medium Shading 1 Accent 5;\lsdpriority64 \lsdlocked0 Medium Shading 2 Accent 5;\lsdpriority65 \lsdlocked0 Medium List 1 Accent 5;\lsdpriority66 \lsdlocked0 Medium List 2 Accent 5;
\lsdpriority67 \lsdlocked0 Medium Grid 1 Accent 5;\lsdpriority68 \lsdlocked0 Medium Grid 2 Accent 5;\lsdpriority69 \lsdlocked0 Medium Grid 3 Accent 5;\lsdpriority70 \lsdlocked0 Dark List Accent 5;\lsdpriority71 \lsdlocked0 Colorful Shading Accent 5;
\lsdpriority72 \lsdlocked0 Colorful List Accent 5;\lsdpriority73 \lsdlocked0 Colorful Grid Accent 5;\lsdpriority60 \lsdlocked0 Light Shading Accent 6;\lsdpriority61 \lsdlocked0 Light List Accent 6;\lsdpriority62 \lsdlocked0 Light Grid Accent 6;
\lsdpriority63 \lsdlocked0 Medium Shading 1 Accent 6;\lsdpriority64 \lsdlocked0 Medium Shading 2 Accent 6;\lsdpriority65 \lsdlocked0 Medium List 1 Accent 6;\lsdpriority66 \lsdlocked0 Medium List 2 Accent 6;
\lsdpriority67 \lsdlocked0 Medium Grid 1 Accent 6;\lsdpriority68 \lsdlocked0 Medium Grid 2 Accent 6;\lsdpriority69 \lsdlocked0 Medium Grid 3 Accent 6;\lsdpriority70 \lsdlocked0 Dark List Accent 6;\lsdpriority71 \lsdlocked0 Colorful Shading Accent 6;
\lsdpriority72 \lsdlocked0 Colorful List Accent 6;\lsdpriority73 \lsdlocked0 Colorful Grid Accent 6;\lsdqformat1 \lsdpriority19 \lsdlocked0 Subtle Emphasis;\lsdqformat1 \lsdpriority21 \lsdlocked0 Intense Emphasis;
\lsdqformat1 \lsdpriority31 \lsdlocked0 Subtle Reference;\lsdqformat1 \lsdpriority32 \lsdlocked0 Intense Reference;\lsdqformat1 \lsdpriority33 \lsdlocked0 Book Title;\lsdsemihidden1 \lsdunhideused1 \lsdpriority37 \lsdlocked0 Bibliography;
\lsdsemihidden1 \lsdunhideused1 \lsdqformat1 \lsdpriority39 \lsdlocked0 TOC Heading;\lsdpriority41 \lsdlocked0 Plain Table 1;\lsdpriority42 \lsdlocked0 Plain Table 2;\lsdpriority43 \lsdlocked0 Plain Table 3;\lsdpriority44 \lsdlocked0 Plain Table 4;
\lsdpriority45 \lsdlocked0 Plain Table 5;\lsdpriority40 \lsdlocked0 Grid Table Light;\lsdpriority46 \lsdlocked0 Grid Table 1 Light;\lsdpriority47 \lsdlocked0 Grid Table 2;\lsdpriority48 \lsdlocked0 Grid Table 3;\lsdpriority49 \lsdlocked0 Grid Table 4;
\lsdpriority50 \lsdlocked0 Grid Table 5 Dark;\lsdpriority51 \lsdlocked0 Grid Table 6 Colorful;\lsdpriority52 \lsdlocked0 Grid Table 7 Colorful;\lsdpriority46 \lsdlocked0 Grid Table 1 Light Accent 1;\lsdpriority47 \lsdlocked0 Grid Table 2 Accent 1;
\lsdpriority48 \lsdlocked0 Grid Table 3 Accent 1;\lsdpriority49 \lsdlocked0 Grid Table 4 Accent 1;\lsdpriority50 \lsdlocked0 Grid Table 5 Dark Accent 1;\lsdpriority51 \lsdlocked0 Grid Table 6 Colorful Accent 1;
\lsdpriority52 \lsdlocked0 Grid Table 7 Colorful Accent 1;\lsdpriority46 \lsdlocked0 Grid Table 1 Light Accent 2;\lsdpriority47 \lsdlocked0 Grid Table 2 Accent 2;\lsdpriority48 \lsdlocked0 Grid Table 3 Accent 2;
\lsdpriority49 \lsdlocked0 Grid Table 4 Accent 2;\lsdpriority50 \lsdlocked0 Grid Table 5 Dark Accent 2;\lsdpriority51 \lsdlocked0 Grid Table 6 Colorful Accent 2;\lsdpriority52 \lsdlocked0 Grid Table 7 Colorful Accent 2;
\lsdpriority46 \lsdlocked0 Grid Table 1 Light Accent 3;\lsdpriority47 \lsdlocked0 Grid Table 2 Accent 3;\lsdpriority48 \lsdlocked0 Grid Table 3 Accent 3;\lsdpriority49 \lsdlocked0 Grid Table 4 Accent 3;
\lsdpriority50 \lsdlocked0 Grid Table 5 Dark Accent 3;\lsdpriority51 \lsdlocked0 Grid Table 6 Colorful Accent 3;\lsdpriority52 \lsdlocked0 Grid Table 7 Colorful Accent 3;\lsdpriority46 \lsdlocked0 Grid Table 1 Light Accent 4;
\lsdpriority47 \lsdlocked0 Grid Table 2 Accent 4;\lsdpriority48 \lsdlocked0 Grid Table 3 Accent 4;\lsdpriority49 \lsdlocked0 Grid Table 4 Accent 4;\lsdpriority50 \lsdlocked0 Grid Table 5 Dark Accent 4;
\lsdpriority51 \lsdlocked0 Grid Table 6 Colorful Accent 4;\lsdpriority52 \lsdlocked0 Grid Table 7 Colorful Accent 4;\lsdpriority46 \lsdlocked0 Grid Table 1 Light Accent 5;\lsdpriority47 \lsdlocked0 Grid Table 2 Accent 5;
\lsdpriority48 \lsdlocked0 Grid Table 3 Accent 5;\lsdpriority49 \lsdlocked0 Grid Table 4 Accent 5;\lsdpriority50 \lsdlocked0 Grid Table 5 Dark Accent 5;\lsdpriority51 \lsdlocked0 Grid Table 6 Colorful Accent 5;
\lsdpriority52 \lsdlocked0 Grid Table 7 Colorful Accent 5;\lsdpriority46 \lsdlocked0 Grid Table 1 Light Accent 6;\lsdpriority47 \lsdlocked0 Grid Table 2 Accent 6;\lsdpriority48 \lsdlocked0 Grid Table 3 Accent 6;
\lsdpriority49 \lsdlocked0 Grid Table 4 Accent 6;\lsdpriority50 \lsdlocked0 Grid Table 5 Dark Accent 6;\lsdpriority51 \lsdlocked0 Grid Table 6 Colorful Accent 6;\lsdpriority52 \lsdlocked0 Grid Table 7 Colorful Accent 6;
\lsdpriority46 \lsdlocked0 List Table 1 Light;\lsdpriority47 \lsdlocked0 List Table 2;\lsdpriority48 \lsdlocked0 List Table 3;\lsdpriority49 \lsdlocked0 List Table 4;\lsdpriority50 \lsdlocked0 List Table 5 Dark;
\lsdpriority51 \lsdlocked0 List Table 6 Colorful;\lsdpriority52 \lsdlocked0 List Table 7 Colorful;\lsdpriority46 \lsdlocked0 List Table 1 Light Accent 1;\lsdpriority47 \lsdlocked0 List Table 2 Accent 1;\lsdpriority48 \lsdlocked0 List Table 3 Accent 1;
\lsdpriority49 \lsdlocked0 List Table 4 Accent 1;\lsdpriority50 \lsdlocked0 List Table 5 Dark Accent 1;\lsdpriority51 \lsdlocked0 List Table 6 Colorful Accent 1;\lsdpriority52 \lsdlocked0 List Table 7 Colorful Accent 1;
\lsdpriority46 \lsdlocked0 List Table 1 Light Accent 2;\lsdpriority47 \lsdlocked0 List Table 2 Accent 2;\lsdpriority48 \lsdlocked0 List Table 3 Accent 2;\lsdpriority49 \lsdlocked0 List Table 4 Accent 2;
\lsdpriority50 \lsdlocked0 List Table 5 Dark Accent 2;\lsdpriority51 \lsdlocked0 List Table 6 Colorful Accent 2;\lsdpriority52 \lsdlocked0 List Table 7 Colorful Accent 2;\lsdpriority46 \lsdlocked0 List Table 1 Light Accent 3;
\lsdpriority47 \lsdlocked0 List Table 2 Accent 3;\lsdpriority48 \lsdlocked0 List Table 3 Accent 3;\lsdpriority49 \lsdlocked0 List Table 4 Accent 3;\lsdpriority50 \lsdlocked0 List Table 5 Dark Accent 3;
\lsdpriority51 \lsdlocked0 List Table 6 Colorful Accent 3;\lsdpriority52 \lsdlocked0 List Table 7 Colorful Accent 3;\lsdpriority46 \lsdlocked0 List Table 1 Light Accent 4;\lsdpriority47 \lsdlocked0 List Table 2 Accent 4;
\lsdpriority48 \lsdlocked0 List Table 3 Accent 4;\lsdpriority49 \lsdlocked0 List Table 4 Accent 4;\lsdpriority50 \lsdlocked0 List Table 5 Dark Accent 4;\lsdpriority51 \lsdlocked0 List Table 6 Colorful Accent 4;
\lsdpriority52 \lsdlocked0 List Table 7 Colorful Accent 4;\lsdpriority46 \lsdlocked0 List Table 1 Light Accent 5;\lsdpriority47 \lsdlocked0 List Table 2 Accent 5;\lsdpriority48 \lsdlocked0 List Table 3 Accent 5;
\lsdpriority49 \lsdlocked0 List Table 4 Accent 5;\lsdpriority50 \lsdlocked0 List Table 5 Dark Accent 5;\lsdpriority51 \lsdlocked0 List Table 6 Colorful Accent 5;\lsdpriority52 \lsdlocked0 List Table 7 Colorful Accent 5;
\lsdpriority46 \lsdlocked0 List Table 1 Light Accent 6;\lsdpriority47 \lsdlocked0 List Table 2 Accent 6;\lsdpriority48 \lsdlocked0 List Table 3 Accent 6;\lsdpriority49 \lsdlocked0 List Table 4 Accent 6;
\lsdpriority50 \lsdlocked0 List Table 5 Dark Accent 6;\lsdpriority51 \lsdlocked0 List Table 6 Colorful Accent 6;\lsdpriority52 \lsdlocked0 List Table 7 Colorful Accent 6;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Mention;
\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Smart Hyperlink;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Hashtag;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Unresolved Mention;\lsdsemihidden1 \lsdunhideused1 \lsdlocked0 Smart Link;}}{\*\datastore 01050000
02000000180000004d73786d6c322e534158584d4c5265616465722e362e3000000000000000000000060000
d0cf11e0a1b11ae1000000000000000000000000000000003e000300feff090006000000000000000000000001000000010000000000000000100000feffffff00000000feffffff0000000000000000ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
fffffffffffffffffdfffffffeffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
ffffffffffffffffffffffffffffffff52006f006f007400200045006e00740072007900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000016000500ffffffffffffffffffffffff0c6ad98892f1d411a65f0040963251e5000000000000000000000000e0e7
8a8f6311d901feffffff00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000ffffffffffffffffffffffff00000000000000000000000000000000000000000000000000000000
00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000ffffffffffffffffffffffff0000000000000000000000000000000000000000000000000000
000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000ffffffffffffffffffffffff000000000000000000000000000000000000000000000000
0000000000000000000000000000000000000000000000000105000000000000}}';

    public string $convertedEnglish = "The quick brown fox jumps over the lazy dog!";

    public string $convertedArabic = "{\u1606?\u1589?} {\u1581?\u1603?\u1610?\u1605?} {\u1604?\u1607?} {\u1587?\u1585?} {\u1602?\u1575?\u1591?\u1593?} {\u1608?\u1584?\u1608?} {\u1588?\u1571?\u1606?} {\u1593?\u1592?\u1610?\u1605?} {\u1605?\u1603?\u1578?\u1608?\u1576?} {\u1593?\u1604?\u1609?} {\u1579?\u1608?\u1576?} {\u1571?\u1582?\u1590?\u1585?} {\u1608?\u1605?\u1594?\u1604?\u1601?} {\u1576?\u1580?\u1604?\u1583?} {\u1571?\u1586?\u1585?\u1602?}";

    public string $convertedAzeri = "{Z\u601?f\u601?}r, jaketini {d\u601?} {papa\u287?\u305?n\u305?} da {g\u246?t\u252?}r, bu {ax\u351?}am hava {\u231?}ox soyuq olacaq.";

    public string $convertedBreton = "{Yec\u8217?}hed mat Jakez ! Skarzhit ar {gwerenno\u249?}-{ma\u241?}, kavet e vo gwin betek fin ho puhez.";

    public string $convertedBulgarian = "{\u1040?\u1093?} {\u1095?\u1091?\u1076?\u1085?\u1072?} {\u1073?\u1098?\u1083?\u1075?\u1072?\u1088?\u1089?\u1082?\u1072?} {\u1079?\u1077?\u1084?\u1100?\u1086?}, {\u1087?\u1086?\u1083?\u1102?\u1096?\u1074?\u1072?\u1081?} {\u1094?\u1098?\u1092?\u1090?\u1103?\u1097?\u1080?} {\u1078?\u1080?\u1090?\u1072?}.";

    public string $convertedCatalan = "{\u171?}{D\u243?}na amor que {ser\u224?}s {feli\u231?}!{\u187?}. {Aix\u242?}, {il\u183?}{l\u250?}s company {geni\u252?}t, ja {\u233?}s un {llu\u239?}t {r\u232?}tol {blav\u237?}s {d\u8217?}onze kWh.";

    public string $convertedChineseTraditional = "{\u35222?\u37326?\u28961?\u38480?\u24291?\u65292?\u31383?\u22806?\u26377?\u34253?\u22825?}";

    public string $convertedChineseSimplified = "{\u20013?\u22269?\u26234?\u36896?\u65292?\u24935?\u21450?\u20840?\u29699?}";

    public string $convertedCzech = "{Nech\u357?} {ji\u382?} {h\u345?\u237?\u353?n\u233?} saxofony {\u271?\u225?bl\u367?} {rozezvu\u269?\u237?} {s\u237?\u328?} {\u250?d\u283?sn\u253?}mi {t\u243?}ny waltzu, tanga a quickstepu.";

    public string $convertedDanish = "{H\u248?}j bly gom vandt {fr\u230?}k sexquiz {p\u229?} wc";

    public string $convertedDongka = "{\u3944?\u3851?\u3937?\u3954?\u3906?\u3851?\u3921?\u3904?\u3938?\u3851?\u3928?\u3931?\u3962?\u3942?\u3851?\u3939?\u3942?\u3851?\u3936?\u3905?\u4018?\u3956?\u3908?\u3942?\u3851?\u3940?\u3962?\u3942?\u3851?\u3926?\u4019?\u3964?\u3936?\u3954?\u3851?\u3906?\u3919?\u3962?\u3938?\u3854?} {\u3925?\u3942?\u3851?\u3938?\u3986?\u3964?\u3939?\u3851?\u3933?\u3851?\u3942?\u3984?\u4017?\u3962?\u3942?\u3851?\u3935?\u3954?\u3939?\u3851?\u3906?\u3923?\u3964?\u3923?\u3851?\u3906?\u3921?\u3964?\u3908?\u3851?\u3939?\u3988?\u3851?\u3926?\u3934?\u3954?\u3923?\u3854?} {\u3910?\u3906?\u3942?\u3851?\u3920?\u3964?\u3906?\u3942?\u3851?\u3904?\u3956?\u3923?\u3851?\u3926?\u4018?\u3939?\u3851?\u3928?\u3930?\u3956?\u3908?\u3942?\u3851?\u3928?\u3962?\u3921?\u3851?\u3936?\u3911?\u3928?\u3851?\u3921?\u3926?\u4017?\u3908?\u3942?\u3928?\u3920?\u3956?\u3942?\u3854?} {\u3928?\u3943?\u3953?\u3851?\u3928?\u3905?\u3942?\u3851?\u3924?\u3936?\u3954?\u3851?\u3906?\u3929?\u3964?\u3851?\u3926?\u3964?\u3851?\u3913?\u3954?\u3921?\u3851?\u3936?\u3906?\u4017?\u3956?\u3938?\u3851?\u3909?\u3954?\u3906?\u3853?}";

    public string $convertedEsperanto = "Eble {\u265?}iu {kvaza\u365?}-deca {fu\u349?\u293?ora\u309?}o {\u285?}ojigos homtipon";

    public string $convertedEstonian = "{P\u245?}dur Zagrebi {t\u353?ellom\u228?}ngija-{f\u246?}ljetonist Ciqo {k\u252?}lmetas kehvas {garaa\u382?}is";

    public string $convertedFinnish = "{T\u246?rkylempij\u228?}vongahdus";

    public string $convertedFrench = "Voix {ambigu\u235?} {d\u8217?}un {c\u339?}ur qui au {z\u233?}phyr {pr\u233?f\u232?}re les jattes de kiwi";

    public string $convertedGerman = "Victor jagt {zw\u246?}lf {Boxk\u228?}mpfer quer {\u252?}ber den {gro\u223?}en Sylter Deich";

    public string $convertedGreek = "{\u932?\u945?\u967?\u943?\u963?\u964?\u951?} {\u945?\u955?\u974?\u960?\u951?\u958?} {\u946?\u945?\u966?\u942?\u962?} {\u968?\u951?\u956?\u941?\u957?\u951?} {\u947?\u951?}, {\u948?\u961?\u945?\u963?\u954?\u949?\u955?\u943?\u950?\u949?\u953?} {\u965?\u960?\u941?\u961?} {\u957?\u969?\u952?\u961?\u959?\u973?} {\u954?\u965?\u957?\u972?\u962?} {Takh\u237?st\u232?} {al\u244?p\u232?}x {vaph\u234?}s {ps\u232?m\u233?n\u232?} {g\u232?}, {draskel\u237?}zei {yp\u233?}r {n\u242?thro\u253?} {kyn\u243?}s";

    public string $convertedHebrew = "{\u1500?\u1499?\u1503?} {\u1495?\u1499?\u1493?} {\u1500?\u1497?} {\u1504?\u1488?\u1501?} {\u1497?\u1492?\u1493?\u1492?} {\u1500?\u1497?\u1493?\u1501?} {\u1511?\u1493?\u1502?\u1497?} {\u1500?\u1506?\u1491?}, {\u1499?\u1497?} {\u1502?\u1513?\u1508?\u1496?\u1497?} {\u1500?\u1488?\u1505?\u1507?} {\u1490?\u1493?\u1497?\u1501?} {\u1500?\u1511?\u1489?\u1510?\u1497?} {\u1502?\u1502?\u1500?\u1499?\u1493?\u1514?}, {\u1500?\u1513?\u1508?\u1498?} {\u1506?\u1500?\u1497?\u1492?\u1501?} {\u1494?\u1506?\u1502?\u1497?} {\u1499?\u1500?} {\u1495?\u1512?\u1493?\u1503?} {\u1488?\u1508?\u1497?}, {\u1499?\u1497?} {\u1489?\u1488?\u1513?} {\u1511?\u1504?\u1488?\u1514?\u1497?} {\u1514?\u1488?\u1499?\u1500?} {\u1499?\u1500?} {\u1492?\u1488?\u1512?\u1509?}";

    public string $convertedHindi = "{\u2315?\u2359?\u2367?\u2351?\u2379?\u2306?} {\u2325?\u2379?} {\u2360?\u2340?\u2366?\u2344?\u2375?} {\u2357?\u2366?\u2354?\u2375?} {\u2342?\u2369?\u2359?\u2381?\u2335?} {\u2352?\u2366?\u2325?\u2381?\u2359?\u2360?\u2379?\u2306?} {\u2325?\u2375?} {\u2352?\u2366?\u2332?\u2366?} {\u2352?\u2366?\u2357?\u2339?} {\u2325?\u2366?} {\u2360?\u2352?\u2381?\u2357?\u2344?\u2366?\u2358?} {\u2325?\u2352?\u2344?\u2375?} {\u2357?\u2366?\u2354?\u2375?} {\u2357?\u2367?\u2359?\u2381?\u2339?\u2369?\u2357?\u2340?\u2366?\u2352?} {\u2349?\u2327?\u2357?\u2366?\u2344?} {\u2358?\u2381?\u2352?\u2368?\u2352?\u2366?\u2350?}, {\u2309?\u2351?\u2379?\u2343?\u2381?\u2351?\u2366?} {\u2325?\u2375?} {\u2350?\u2361?\u2366?\u2352?\u2366?\u2332?} {\u2342?\u2358?\u2352?\u2341?} {\u2325?\u2375?} {\u2348?\u2337?\u2364?\u2375?} {\u2360?\u2346?\u2369?\u2340?\u2381?\u2352?} {\u2341?\u2375?\u2404?}";

    public string $convertedHungarian = "{J\u243?} foxim {\u233?}s don Quijote {h\u250?}szwattos {l\u225?mp\u225?n\u225?}l {\u252?}lve egy {p\u225?}r {b\u369?v\u246?}s {cip\u337?}t k{\u233?}sz\u237?t.";

    public string $convertedIcelandic = "{K\u230?}mi {n\u253?} {\u246?}xi {h\u233?}r, ykist {\u254?j\u243?}fum {n\u250?} {b\u230?\u240?}i {v\u237?}l og {\u225?}drepa.";

    public string $convertedIgbo = "Nne, nna, {wep\u7909?} {he\u8217?}{l\u8217?\u7909?}{j\u7885?} dum {n\u8217?}ime {\u7885?z\u7909?z\u7909?} {\u7909?m\u7909?}, vufesi obi nye Chukwu, {\u7749?\u7909?r\u7883?an\u7909?}, {gbak\u7885?\u7885?n\u7909?} kpaa, kwee ya ka o guzoshie ike; {\u7885?} {ghagh\u7883?} ito, {nwap\u7909?}ta ezi agwa.";

    public string $convertedIndonesian = "Saya lihat foto Hamengkubuwono XV bersama enam zebra purba cantik yang jatuh dari Alquranmu.";

    public string $convertedIrish = "{D\u8217?}fhuascail {\u205?}osa {\u218?}rmhac na {h\u211?}ighe Beannaithe {p\u243?}r {\u201?}ava agus {\u193?}dhaimh";

    public string $convertedItalian = "Ma la volpe, col suo balzo, ha raggiunto il quieto Fido.";

    public string $convertedJapanese = "{\u12356?\u12429?\u12399?\u12395?\u12411?\u12408?\u12392?} {\u12385?\u12426?\u12396?\u12427?\u12434?} {\u12431?\u12363?\u12424?\u12383?\u12428?\u12381?} {\u12388?\u12397?\u12394?\u12425?\u12416?} {\u12358?\u12432?\u12398?\u12362?\u12367?\u12420?\u12414?} {\u12369?\u12405?\u12371?\u12360?\u12390?} {\u12354?\u12373?\u12365?\u12422?\u12417?\u12415?\u12375?} {\u12433?\u12402?\u12418?\u12379?\u12377?\u65288?\u12435?\u65289?}";

    public string $convertedJavanese = "{\u43467?} {\u43442?\u43428?\u43413?\u43435?\u43407?\u43464?} {\u43426?\u43424?\u43441?\u43438?\u43437?\u43464?} {\u43429?\u43421?\u43415?\u43434?\u43418?\u43464?} {\u43433?\u43410?\u43431?\u43419?\u43412?\u43465?}";

    public string $convertedKorean = "{\u53412?\u49828?\u51032?} {\u44256?\u50976?\u51312?\u44148?\u51008?} {\u51077?\u49696?\u45180?\u47532?} {\u47564?\u45208?\u50556?} {\u54616?\u44256?} {\u53945?\u48324?\u54620?} {\u44592?\u49696?\u51008?} {\u54596?\u50836?\u52824?} {\u50506?\u45796?}.";

    public string $convertedlatin = "Sic fugiens, dux, zelotypos, quam Karus haberis.";

    public string $convertedLatvian = "{Mu\u316?\u311?}a hipiji {m\u275?\u291?}ina {br\u299?}vi {nogar\u353?}ot {celof\u257?}na {\u382?\u326?audz\u275?j\u269?\u363?}sku.";

    public string $convertedLithuanian = "{\u302?}linkdama fechtuotojo {\u353?}paga {sublyk\u269?}iojusi {pragr\u281?\u382?\u279?} {apval\u371?} {arb\u363?z\u261?}";

    public string $convertedLojban = ".{o\u8217?}i mu xagji sofybakni cu zvati le purdi";

    public string $convertedMacedonian = "{\u1029?\u1080?\u1076?\u1072?\u1088?\u1089?\u1082?\u1080?} {\u1087?\u1077?\u1112?\u1079?\u1072?\u1078?}: {\u1096?\u1091?\u1075?\u1072?\u1074?} {\u1073?\u1080?\u1083?\u1084?\u1077?\u1079?} {\u1089?\u1086?} {\u1095?\u1091?\u1076?\u1077?\u1114?\u1077?} {\u1119?\u1074?\u1072?\u1082?\u1072?} {\u1116?\u1086?\u1092?\u1090?\u1077?} {\u1080?} {\u1082?\u1077?\u1113?} {\u1085?\u1072?} {\u1090?\u1091?\u1107?} {\u1094?\u1077?\u1093?}.";

    public string $convertedMalayalam = "{\u3333?\u3356?\u3381?\u3393?\u3330?} {\u3334?\u3368?\u3375?\u3393?\u3330?} {\u3344?\u3376?\u3390?\u3381?\u3364?\u3381?\u3393?\u3330?} {\u3351?\u3376?\u3393?\u3361?\u3368?\u3393?\u3330?} {\u3349?\u3360?\u3403?\u3376?} {\u3384?\u3405?\u3381?\u3376?\u3330?} {\u3370?\u3402?\u3380?\u3391?\u3349?\u3405?\u3349?\u3398?} {\u3385?\u3390?\u3376?\u3381?\u3393?\u3330?} {\u3346?\u3362?\u3405?\u3375?\u3390?\u3363?\u3381?\u3393?\u3330?} {\u3371?\u3390?\u3378?\u3364?\u3405?\u3364?\u3391?\u3378?\u3405?\u8205?} {\u3374?\u3358?\u3405?\u3358?\u3379?\u3393?\u3330?} {\u3336?\u3377?\u3368?\u3405?\u8205?} {\u3349?\u3399?\u3382?\u3364?\u3405?\u3364?\u3391?\u3378?\u3405?\u8205?} {\u3348?\u3383?\u3367?} {\u3342?\u3363?\u3405?\u3363?\u3375?\u3393?\u3374?\u3390?\u3375?\u3391?} {\u3339?\u3364?\u3393?\u3374?\u3364?\u3391?\u3375?\u3393?\u3330?} {\u3333?\u3368?\u3352?\u3375?\u3393?\u3330?} {\u3373?\u3394?\u3368?\u3390?\u3365?\u3375?\u3393?\u3374?\u3390?\u3375?} {\u3337?\u3374?} {\u3366?\u3393?\u3331?\u3350?\u3355?\u3381?\u3391?\u3375?\u3403?\u3359?\u3398?} {\u3335?\u3359?\u3364?\u3393?} {\u3370?\u3390?\u3366?\u3330?} {\u3343?\u3368?\u3405?\u3364?\u3391?} {\u3353?\u3405?\u3375?\u3399?\u3375?\u3390?\u3366?\u3395?\u3382?\u3330?} {\u3368?\u3391?\u3376?\u3405?\u8205?\u3357?\u3376?\u3391?\u3375?\u3391?\u3378?\u3398?} {\u3354?\u3391?\u3377?\u3405?\u3377?\u3378?\u3349?\u3379?\u3398?} {\u3347?\u3374?\u3368?\u3391?\u3349?\u3405?\u3349?\u3393?\u3374?\u3405?\u3370?\u3403?\u3379?\u3405?\u8205?} {\u3372?\u3390?\u8205?\u3378?\u3375?\u3393?\u3359?\u3398?} {\u3349?\u3363?\u3405?\u8205?\u3349?\u3379?\u3391?\u3378?\u3405?\u8205?} {\u3368?\u3392?\u3376?\u3405?\u8205?} {\u3338?\u3376?\u3405?\u8205?\u3368?\u3405?\u3368?\u3393?} {\u3381?\u3391?\u3353?\u3405?\u3353?\u3391?}.";

    public string $convertedMapudungun = "Gvxam mincetu apocikvyeh: {\u241?}izol ce mamvj ka raq kuse bafkeh mew";

    public string $convertedMongolian = "{\u1065?\u1105?\u1090?\u1082?\u1072?\u1085?\u1099?} {\u1092?\u1077?\u1088?\u1084?\u1076?} {\u1087?\u1080?\u1081?\u1096?\u1080?\u1085?} {\u1094?\u1091?\u1074?\u1098?\u1103?}. {\u1041?\u1257?\u1075?\u1078?} {\u1079?\u1086?\u1075?\u1089?\u1095?} {\u1093?\u1101?\u1083?\u1100?\u1102?\u1199?}.";

    public string $convertedMyanmar = "{\u4126?\u4142?\u4127?\u4141?\u4143?\u4128?\u4154?\u4121?\u4158?} {\u4105?\u4140?\u4111?\u4154?\u4096?\u4156?\u4142?\u4152?\u4123?\u4158?\u4100?\u4154?\u4126?\u4106?\u4154?} {\u4129?\u4140?\u4122?\u4143?\u4125?\u4109?\u4153?\u4110?\u4116?\u4102?\u4145?\u4152?\u4106?\u4157?\u4158?\u4116?\u4154?\u4152?\u4101?\u4140?\u4096?\u4141?\u4143?} {\u4103?\u4124?\u4157?\u4116?\u4154?\u4104?\u4145?\u4152?\u4120?\u4145?\u4152?\u4119?\u4140?\u4114?\u4150?\u4117?\u4100?\u4154?\u4113?\u4096?\u4154?} {\u4129?\u4115?\u4141?\u4107?\u4153?\u4108?\u4140?\u4116?\u4154?\u4124?\u4155?\u4096?\u4154?} {\u4098?\u4099?\u4116?\u4111?\u4118?\u4112?\u4154?\u4097?\u4146?\u4151?\u4126?\u4106?\u4154?\u4171?}";

    public string $convertedNorwegian = "{V\u229?}r {s\u230?}re Zulu fra {bade\u248?}ya spilte jo whist og quickstep i min taxi.";

    public string $convertedPolish = "{Je\u380?}u {kl\u261?}tw, {sp\u322?\u243?d\u378?} Finom {cz\u281?\u347?\u263?} gry {ha\u324?}b!";

    public string $convertedPortuguese = "{Lu\u237?}s {arg\u252?}ia {\u224?} {J\u250?}lia que {\u171?}{bra\u231?\u245?}es, {f\u233?}, {ch\u225?}, {\u243?}xido, {p\u244?}r, {z\u226?ng\u227?o\u187?} eram palavras do {portugu\u234?}s.";

    public string $convertedRomanian = "{Muzicolog\u259?} {\u238?}n bej {v\u226?}nd whisky {\u537?}i tequila, {pre\u539?} fix.";

    public string $convertedRussian = "{\u1069?\u1093?}, {\u1095?\u1091?\u1078?\u1072?\u1082?}, {\u1086?\u1073?\u1097?\u1080?\u1081?} {\u1089?\u1098?\u1105?\u1084?} {\u1094?\u1077?\u1085?} {\u1096?\u1083?\u1103?\u1087?} ({\u1102?\u1092?\u1090?\u1100?}) {\u8211?} {\u1074?\u1076?\u1088?\u1099?\u1079?\u1075?}!";

    public string $convertedSanscrit = "{\u2325?\u2307?} {\u2326?\u2327?\u2380?\u2328?\u2366?\u2329?\u2330?\u2367?\u2330?\u2381?\u2331?\u2380?\u2332?\u2366?} {\u2333?\u2366?\u2334?\u2381?\u2332?\u2381?\u2334?\u2379?\u2365?\u2335?\u2380?\u2336?\u2368?\u2337?\u2337?\u2339?\u2381?\u2338?\u2339?\u2307?\u2404?} {\u2340?\u2341?\u2379?\u2342?\u2343?\u2368?\u2344?\u2381?} {\u2346?\u2347?\u2352?\u2381?\u2348?\u2366?\u2349?\u2368?\u2352?\u2381?\u2350?\u2351?\u2379?\u2365?\u2352?\u2367?\u2354?\u2381?\u2357?\u2366?\u2358?\u2367?\u2359?\u2366?\u2306?} {\u2360?\u2361?\u2307?\u2404?\u2404?}";

    public string $convertedScottishGaelic = "Mus {d\u8217?}{fh\u224?}g {C\u232?}it-{\u217?}na {r\u242?}p {\u204?} le ob.";

    public string $convertedSerbian = "Gojazni {\u273?a\u269?i\u263?} s biciklom {dr\u382?}i hmelj i finu vatu u {d\u382?}epu {no\u353?}nje.";

    public string $convertedSlovak = "{K\u341?de\u318?} {\u353?\u357?astn\u253?}ch {\u271?at\u318?}ov {u\u269?\u237?} pri {\u250?st\u237?} {V\u225?}hu {m\u314?}kveho {ko\u328?}a {obhr\u253?za\u357?} {k\u244?}ru a {\u382?ra\u357?} {\u269?erstv\u233?} {m\u228?}so.";

    public string $convertedSlovenian = "V {ko\u382?u\u353?\u269?}ku hudobnega fanta stopiclja mizar.";

    public string $convertedSpanish = "{Benjam\u237?}n {pidi\u243?} una bebida de kiwi y fresa; {No\u233?}, sin {verg\u252?}enza, la {m\u225?}s exquisita {champa\u241?}a del {men\u250?}.";

    public string $convertedSwedish = "Yxskaftbud, ge {v\u229?}r WC-{zonm\u246?} IQ-{hj\u228?}lp.";

    public string $convertedTagalog = "Ang bawat rehistradong kalahok sa patimpalak ay umaasang magantimpalaan ng {\u241?}ino";

    public string $convertedThai = "{\u3648?\u3611?\u3655?\u3609?\u3617?\u3609?\u3640?\u3625?\u3618?\u3660?\u3626?\u3640?\u3604?\u3611?\u3619?\u3632?\u3648?\u3626?\u3619?\u3636?\u3600?\u3648?\u3621?\u3636?\u3624?\u3588?\u3640?\u3603?\u3588?\u3656?\u3634?} {\u3585?\u3623?\u3656?\u3634?\u3610?\u3619?\u3619?\u3604?\u3634?\u3613?\u3641?\u3591?\u3626?\u3633?\u3605?\u3623?\u3660?\u3648?\u3604?\u3619?\u3633?\u3592?\u3593?\u3634?\u3609?} {\u3592?\u3591?\u3613?\u3656?\u3634?\u3615?\u3633?\u3609?\u3614?\u3633?\u3602?\u3609?\u3634?\u3623?\u3636?\u3594?\u3634?\u3585?\u3634?\u3619?} {\u3629?\u3618?\u3656?\u3634?\u3621?\u3657?\u3634?\u3591?\u3612?\u3621?\u3634?\u3597?\u3620?\u3653?\u3648?\u3586?\u3656?\u3609?\u3590?\u3656?\u3634?\u3610?\u3637?\u3601?\u3634?\u3651?\u3588?\u3619?} {\u3652?\u3617?\u3656?\u3606?\u3639?\u3629?\u3650?\u3607?\u3625?\u3650?\u3585?\u3619?\u3608?\u3649?\u3594?\u3656?\u3591?\u3595?\u3633?\u3604?\u3630?\u3638?\u3604?\u3630?\u3633?\u3604?\u3604?\u3656?\u3634?} {\u3627?\u3633?\u3604?\u3629?\u3616?\u3633?\u3618?\u3648?\u3627?\u3617?\u3639?\u3629?\u3609?\u3585?\u3637?\u3628?\u3634?\u3629?\u3633?\u3594?\u3596?\u3634?\u3626?\u3633?\u3618?} {\u3611?\u3599?\u3636?\u3610?\u3633?\u3605?\u3636?\u3611?\u3619?\u3632?\u3614?\u3620?\u3605?\u3636?\u3585?\u3598?\u3585?\u3635?\u3627?\u3609?\u3604?\u3651?\u3592?} {\u3614?\u3641?\u3604?\u3592?\u3634?\u3651?\u3627?\u3657?\u3592?\u3658?\u3632?\u3654?} {\u3592?\u3659?\u3634?\u3654?} {\u3609?\u3656?\u3634?\u3615?\u3633?\u3591?\u3648?\u3629?\u3618?\u3631?}";

    public string $convertedTibetan = "{\u3848?} {\u3921?\u3904?\u3938?\u3851?\u3928?\u3931?\u3962?\u3942?\u3851?\u3944?\u3851?\u3937?\u3954?\u3906?\u3851?\u3939?\u3942?\u3851?\u3936?\u3905?\u4018?\u3956?\u3908?\u3942?\u3851?\u3937?\u3962?\u3851?\u3940?\u3962?\u3942?\u3851?\u3906?\u3919?\u3962?\u3938?\u3853?} {\u3853?\u3925?\u3942?\u3851?\u3938?\u3986?\u3964?\u3939?\u3851?\u3933?\u3851?\u3942?\u3984?\u4017?\u3962?\u3942?\u3851?\u3935?\u3954?\u3939?\u3851?\u3906?\u3923?\u3964?\u3923?\u3851?\u3906?\u3921?\u3964?\u3908?\u3851?\u3939?\u3988?\u3851?\u3926?\u3934?\u3954?\u3923?\u3853?} {\u3853?\u3910?\u3906?\u3942?\u3851?\u3920?\u3964?\u3906?\u3942?\u3851?\u3904?\u3956?\u3923?\u3851?\u3926?\u4018?\u3939?\u3851?\u3928?\u3930?\u3956?\u3908?\u3942?\u3851?\u3928?\u3962?\u3921?\u3851?\u3936?\u3911?\u3928?\u3851?\u3926?\u4017?\u3908?\u3942?\u3851?\u3928?\u3920?\u3956?\u3942?\u3853?} {\u3853?\u3928?\u3851?\u3943?\u3953?\u3851?\u3928?\u3905?\u3942?\u3851?\u3924?\u3936?\u3954?\u3851?\u3906?\u3929?\u3964?\u3851?\u3926?\u3964?\u3851?\u3913?\u3954?\u3921?\u3851?\u3906?\u4017?\u3956?\u3938?\u3851?\u3909?\u3954?\u3906?\u3853?}";

    public string $convertedTurkish = "{Fahi\u351?} bluz {g\u252?}vencesi {ya\u287?d\u305?}rma projesi {\u231?\u246?kt\u252?}.";

    public string $convertedUkrainian = "{\u1063?\u1091?\u1108?\u1096?} {\u1111?\u1093?}, {\u1076?\u1086?\u1094?\u1102?}, {\u1075?\u1072?}? {\u1050?\u1091?\u1084?\u1077?\u1076?\u1085?\u1072?} {\u1078?} {\u1090?\u1080?}, {\u1087?\u1088?\u1086?\u1097?\u1072?\u1081?\u1089?\u1103?} {\u1073?\u1077?\u1079?} {\u1169?\u1086?\u1083?\u1100?\u1092?\u1110?\u1074?}!";

    public string $convertedUrdu = "{\u1657?\u1726?\u1606?\u1672?} {\u1605?\u1740?\u1722?\u1548?} {\u1575?\u1740?\u1705?} {\u1602?\u1581?\u1591?} {\u1586?\u1583?\u1729?} {\u1711?\u1575?\u1572?\u1722?} {\u1587?\u1746?} {\u1711?\u1584?\u1585?\u1578?\u1746?} {\u1608?\u1602?\u1578?} {\u1575?\u1740?\u1705?} {\u1670?\u1681?\u1670?\u1681?\u1746?\u1548?} {\u1576?\u1575?\u1571?\u1579?\u1585?} {\u1608?} {\u1601?\u1575?\u1585?\u1594?} {\u1588?\u1582?\u1589?} {\u1705?\u1608?} {\u1576?\u1593?\u1590?} {\u1580?\u1604?} {\u1662?\u1585?\u1740?} {\u1606?\u1605?\u1575?} {\u1575?\u1688?\u1583?\u1729?\u1746?} {\u1606?\u1592?\u1585?} {\u1570?\u1574?\u1746?\u1748?}";

    public string $convertedUyghur = "{\u1574?\u1575?\u1739?\u1735?} {\u1576?\u1609?\u1585?} {\u1580?\u1736?\u1662?} {\u1582?\u1608?\u1585?\u1575?\u1586?} {\u1601?\u1585?\u1575?\u1606?\u1587?\u1609?\u1610?\u1749?\u1606?\u1609?\u1709?} {\u1662?\u1575?\u1585?\u1609?\u1688?} {\u1588?\u1749?\u1726?\u1585?\u1609?\u1711?\u1749?} {\u1610?\u1744?\u1602?\u1609?\u1606?} {\u1578?\u1575?\u1594?\u1602?\u1575?} {\u1603?\u1734?\u1670?\u1749?\u1604?\u1605?\u1609?\u1583?\u1609?}.";

    public string $convertedYoruba = "{\u204?w\u242?\u809?}{f\u224?} {\u324?} {y\u242?\u809?} {s\u233?}ji {t\u243?} {gboj\u250?m\u243?\u809?}, {\u243?} {h\u224?}n {p\u225?k\u224?np\u242?\u809?} gan-an {nis\u809?\u233?\u809?} {r\u232?\u809?} b{\u243?} {d\u242?\u809?}la.";

    public string $convertedWelsh = "Parciais fy jac codi baw hud llawn {d\u373?}r ger {t\u375?} Mabon.";

    public string $convertedVietnamese = "{Tr\u259?}m {n\u259?}m trong {c\u245?}i {ng\u432?\u7901?}i ta, {ch\u7919?} {t\u224?}i {ch\u7919?} {ph\u7853?}n {kh\u233?}o {l\u224?} {gh\u233?}t nhau. {Tr\u7843?}i qua {m\u7897?}t {cu\u7897?}c {b\u7875?} {d\u226?}u, {nh\u7919?}ng {\u273?i\u7873?}u {tr\u244?}ng {th\u7845?}y {m\u224?} {\u273?}au {\u273?\u7899?}n {l\u242?}ng. {L\u7841?} {g\u236?} {b\u7881?} {s\u7855?}c {t\u432?} phong, {tr\u7901?}i xanh quen {v\u7899?}i {m\u225?} {h\u7891?}ng {\u273?\u225?}nh ghen.";
}
