<?php
$placeIds = [
202,
29670,
29176,
26263,
2016,
739,
21357,
9300,
34558,
31740,
31706,
15417,
1462,
315,
1801,
15,
997,
36388,
5642412,
5642053,
2709624,
5642030,
5642022,
36461,
26948,
3996,
36613,
36792,
1635,
28110,
26986,
9975,
5604,
26995,
12915,
31483,
33336,
517,
10174,
33346,
27470,
13195,
18021,
30914,
30903,
36185,
36074,
1324,
5836,
31505,
2013,
29277,
29194,
1863,
30837,
32213,
5834,
21934,
35524,
842,
30230,
5642233,
35071,
29321,
35678,
29894,
33761,
35563,
36014,
26954,
27857,
34262,
12962,
10651,
26617,
26936,
10650,
3995,
35002,
35754,
33341,
34323,
27064,
31147,
26128,
615,
196,
31750,
26945,
26929,
700,
26925,
28688,
28876,
26323,
26293,
30677,
29541,
30494,
36848,
618,
2008,
630,
12871,
27473,
727,
29121,
29014,
27988,
8101,
35633,
21195,
27012,
29199,
29406,
33864,
36456,
7615,
37155,
37064,
31734,
20838,
1687,
27912,
1868,
26173,
12593,
26434,
27013,
3898,
27987,
812,
35182,
35224,
18703,
35626,
35286,
1733,
28089,
35123,
12926,
198,
192,
23153,
1464,
36572,
36605,
35614,
305,
28150,
1447,
27017,
1458,
26287,
501,
30853,
36103,
12606,
1529,
290,
1371,
17,
39274,
189,
767,
200,
258,
897,
88,
1385,
12883,
14571,
1378,
16258,
35387,
36484,
36114,
33360,
43261,
12961,
32487,
7197,
29092,
10647,
3985,
33380,
33415,
655,
705,
32548,
10149,
660,
1923,
10292,
34890,
31576,
35234,
382,
28633,
33252,
995,
35147,
675,
43156,
2531,
36150,
30171,
103905,
102790,
28551,
103801,
102163,
2032781,
4102271,
4644639,
2099060,
2982793,
4116733,
445002,
527068,
5326207,
4989134,
30163,
29870,
5642432,
5642402,
41395,
633,
25675,
10652,
];


$placeIdsFromSql = [
202,
29670,
29176,
26263,
2016,
739,
21357,
9300,
34558,
31740,
31706,
15417,
1462,
315,
1801,
15,
997,
36388,
5642412,
5642053,
5642030,
5642022,
36461,
26948,
3996,
36613,
36792,
1635,
28110,
26986,
9975,
5604,
26995,
12915,
31483,
33336,
517,
10174,
33346,
27470,
13195,
18021,
30914,
30903,
36185,
36074,
1324,
5836,
31505,
2013,
29277,
29194,
1863,
30837,
32213,
5834,
21934,
35524,
842,
30230,
5642233,
35071,
29321,
35678,
29894,
33761,
35563,
36014,
26954,
27857,
34262,
12962,
10651,
26617,
26936,
10650,
3995,
35002,
35754,
33341,
34323,
27064,
31147,
26128,
615,
196,
31750,
26945,
26929,
700,
26925,
28688,
28876,
26323,
26293,
30677,
29541,
30494,
36848,
618,
2008,
630,
12871,
27473,
727,
29121,
29014,
27988,
8101,
35633,
21195,
27012,
29199,
29406,
33864,
36456,
7615,
37155,
37064,
31734,
20838,
1687,
27912,
1868,
26173,
12593,
26434,
27013,
3898,
27987,
812,
35182,
35224,
18703,
35626,
35286,
1733,
35123,
12926,
198,
192,
23153,
1464,
36572,
36605,
35614,
305,
28150,
1447,
27017,
1458,
26287,
501,
30853,
36103,
12606,
1529,
290,
1371,
17,
39274,
189,
767,
200,
258,
897,
88,
1385,
12883,
14571,
1378,
16258,
35387,
36484,
36114,
33360,
43261,
12961,
32487,
7197,
29092,
10647,
3985,
33380,
33415,
655,
705,
32548,
10149,
660,
1923,
10292,
34890,
31576,
35234,
382,
28633,
33252,
995,
35147,
675,
43156,
2531,
36150,
30171,
103905,
102790,
28551,
103801,
102163,
2032781,
4102271,
4644639,
2099060,
2982793,
4116733,
445002,
527068,
5326207,
4989134,
30163,
29870,
5642432,
5642402,
41395,
633,
25675,
10652,
];


$unfind = [];
foreach( $placeIds as $value ){
	if( !in_array( $value, $placeIdsFromSql) ){
		$unfind[] = $value;
	}
}
print_r( $unfind );
