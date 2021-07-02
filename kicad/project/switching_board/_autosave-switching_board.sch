EESchema Schematic File Version 4
EELAYER 30 0
EELAYER END
$Descr A4 11693 8268
encoding utf-8
Sheet 1 1
Title "switching_board"
Date "2021-07-02"
Rev ""
Comp ""
Comment1 ""
Comment2 ""
Comment3 ""
Comment4 ""
$EndDescr
$Comp
L Device:Battery BT1
U 1 1 60DEE4D6
P 800 3750
F 0 "BT1" H 908 3796 50  0000 L CNN
F 1 "Battery(24v)" H 908 3705 50  0000 L CNN
F 2 "" V 800 3810 50  0001 C CNN
F 3 "~" V 800 3810 50  0001 C CNN
	1    800  3750
	1    0    0    -1  
$EndComp
$Comp
L Device:Q_NMOS_GDSD Q1
U 1 1 60DEFF01
P 3000 3800
F 0 "Q1" H 3288 3846 50  0000 L CNN
F 1 "Q_NMOS_GDSD" H 3288 3755 50  0000 L CNN
F 2 "" H 3200 3900 50  0001 C CNN
F 3 "~" H 3000 3800 50  0001 C CNN
	1    3000 3800
	1    0    0    -1  
$EndComp
Text Notes 2850 4500 0    50   ~ 0
n-mosfet (name : IRL8113)\n1-gate\n2-drain\n3-source\n4-drain(backplate)
$Comp
L Device:R R1
U 1 1 60DF172D
P 2450 3800
F 0 "R1" V 2243 3800 50  0000 C CNN
F 1 "R(1):" V 2334 3800 50  0000 C CNN
F 2 "" V 2380 3800 50  0001 C CNN
F 3 "~" H 2450 3800 50  0001 C CNN
	1    2450 3800
	0    1    1    0   
$EndComp
$Comp
L Switch:SW_Push SW?
U 1 1 60DF35EB
P 2400 2900
F 0 "SW?" H 2400 3185 50  0000 C CNN
F 1 "emergency_switch" H 2400 3094 50  0000 C CNN
F 2 "" H 2400 3100 50  0001 C CNN
F 3 "~" H 2400 3100 50  0001 C CNN
	1    2400 2900
	1    0    0    -1  
$EndComp
Text Notes 2850 4850 0    50   ~ 0
absolute macimum ratings\nVds : 30 v\nVgs : 20 v\nId : 74 A\n
$EndSCHEMATC
