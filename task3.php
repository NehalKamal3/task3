<?php
$countryList = [
    'CA'        => 'Canada',
    'US'        => 'United States']
;
$stateList['CA'] = [
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'MB'        => 'Manitoba',
    'NB'        => 'New Brunswick',
    'NL'        => 'Newfoundland/Labrador',
    'NS'        => 'Nova Scotia',
    'NT'        => 'Northwest Territories',
    'NU'        => 'Nunavut',
    'ON'        => 'Ontario',
    'PE'        => 'Prince Edward Island',
    'QC'        => 'Quebec',
    'SK'        => 'Saskatchewan',
    'YT'        => 'Yukon']
;
$stateList['US'] = [
    'AL'        => 'Alabama',
    'AK'        => 'Alaska',
    'AZ'        => 'Arizona',
    'AR'        => 'Arkansas',
    'CA'        => 'California',
    'CO'        => 'Colorado',
    'CT'        => 'Connecticut',
    'DE'        => 'Delaware',
    'DC'        => 'District of Columbia',
    'FL'        => 'Florida',
    'GA'        => 'Georgia',
    'HI'        => 'Hawaii',
    'ID'        => 'Idaho',
    'IL'        => 'Illinois',
    'IN'        => 'Indiana',
    'IA'        => 'Iowa',
    'KS'        => 'Kansas',
    'KY'        => 'Kentucky',
    'LA'        => 'Louisiana',
    'ME'        => 'Maine',
    'MD'        => 'Maryland',
    'MA'        => 'Massachusetts',
    'MI'        => 'Michigan',
    'MN'        => 'Minnesota',
    'MS'        => 'Mississippi',
    'MO'        => 'Missouri',
    'MT'        => 'Montana',
    'NE'        => 'Nebraska',
    'NV'        => 'Nevada',
    'NH'        => 'New Hampshire',
    'NJ'        => 'New Jersey',
    'NM'        => 'New Mexico',
    'NY'        => 'New York',
    'NC'        => 'North Carolina',
    'ND'        => 'North Dakota',
    'OH'        => 'Ohio',
    'OK'        => 'Oklahoma',
    'OR'        => 'Oregon',
    'PA'        => 'Pennsylvania',
    'RI'        => 'Rhode Island',
    'SC'        => 'South Carolina',
    'SD'        => 'South Dakota',
    'TN'        => 'Tennessee',
    'TX'        => 'Texas',
    'UT'        => 'Utah',
    'VT'        => 'Vermont',
    'VA'        => 'Virginia',
    'WA'        => 'Washington',
    'WV'        => 'West Virginia',
    'WI'        => 'Wisconsin',
    'WY'        => 'Wyoming'
];

//  function to search for any item in array

    function inArray($name,$array){

    if (in_array($name, $array)) {
        echo '<h4>item '.$name .' exists ,<br></h4>';
    }else{
        echo '<h4>'.  $name. ' not exists,<br></h4>';
    }
}
inArray('Kansas' , $stateList['CA']);
inArray('Kansas' , $stateList['US']);
inArray('Nova Scotia' , $stateList['CA']);

    echo '<br>';



  //   2
 
  

     $x = PHP_INT_MAX ;
  
     echo 'max number is '.$x;
     echo '<br>';

$max_int = $x;
$arr = [];
$arr[1] = 'last name'; 

$arr[ $max_int ] = 'this is max of array '; 

$arr[0] = 'first name'; 

?>
<p>the array could not add any more items as the last index is the largest number the system version can hold 
so it returns an error,if we changed $max_int to a smaller number it becomes able to enroll another 
inputs in the array.</p><?php
                //  some idea,  so we can do that for the last item:

function lastIn($array =array()){

    global $x;
    global $max_int;
if( ($max_int+1) < PHP_INT_MAX){
   echo 'very well ,last item is added <br>';

}else{
   // echo $array[$max_int- 1] .'is the last ';
    echo 'sorry,no more values can be added to the array <br>';
}
}
lastIn($arr[$max_int]='this is the last item ');
//lastIn($arr[$max_int+1]='this is the last item 2 ');

echo '<pre>';
print_r($arr);
echo '<pre>';



/*
search and use the following array methods
 ( count , in_array , array_key_exists , array_keys , array_values , array_sum , end , array_rand , array_merge
  , array_replace , array_shift , array_unshift , array_push , array_pop , array_slice , array_splice )
 make 1 example on each of the following array methods 
 */

 $stateList['CA'] = [
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'MB'        => 'Manitoba',
    'NB'        => 'New Brunswick',
    'NL'        => 'Newfoundland/Labrador',
    'NS'        => 'Nova Scotia',
    'NT'        => 'Northwest Territories',
    'NU'        => 'Nunavut',
    'ON'        => 'Ontario',
    'PE'        => 'Prince Edward Island',
    'QC'        => 'Quebec',
    'SK'        => 'Saskatchewan',
    'YT'        => 'Yukon']
;

echo $count= count($stateList['CA']).'<br>';

if(in_array('Alberta',$stateList['CA'])){
    echo 'this city exists <br>';
}else{
    echo 'not exists <br>';
}

if(array_key_exists('SK',$stateList['CA'])){
    echo 'this key exists <br>';
}else{
    echo 'key not exists <br>';
}
// array_keys
print_r(array_keys($stateList['CA']));

//array_values
print_r(array_values($stateList['CA']));

//array_sum
$num =array(0=>2,3,4,5,6,9);
echo 'sum = '.array_sum($num);
echo 'sum = '.array_sum($stateList['CA']);
echo '<br>';

//end
echo 'the last item is '.end($stateList['CA']);

//array_rand
$rands = array_rand($stateList['CA'], 3);

echo '<pre>';
print_r($rands);
echo '<pre>';

echo 'the random values are : ';
foreach($rands as $rand){
echo $stateList['CA'][$rand] . ",";

}

//array_merge

//$result = array_merge($stateList['CA'], $stateList['US']);
$f= 'first name';
$l='lastname';

$result =array_merge((array)$f,(array)$l);
print_r($result);

//array_replace
$stateList['M']= ['NT'   => 'Northwest calefornia',
                 'NU'  => 'Nunavut albame'];
$replace= array_replace( $stateList['CA'], $stateList['M'] );
print_r($replace);

//array_shift
print_r(array_shift($stateList['CA']));
//print_r($stateList['M']);
echo '<br>';

//array_unshift
array_unshift($stateList['CA'] , 'Swidan');
print_r($stateList['CA']);

//array_push        relative to array unshift
array_unshift($stateList['CA'] ,'Colompia','yoka');

$stateList['CA']['CO']= 'cowala';
print_r($stateList['CA']);

//array_pop
 array_pop($stateList['CA']);
print_r($stateList['CA']);


//array_slice
$output = array_slice($stateList['CA'], -3 , 11); 
print_r($output );

$arr = array('a'=>'apple', 'b'=>'banana', '13'=>'pear', 'd'=>'orange','hh','iii');
print_r($arr);
print_r(array_slice($arr, 0, -2));


//array_splice

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1,-2);
var_dump($input);
 array_splice($stateList['CA'], 3 , 5,['no'=>'fff','jkio','sa'=>'sara']); 
print_r($stateList['CA'] );

