function populate(s1,s2)
{
var s1 = document.getElementById(s1);
var s2 = document.getElementById(s2);

s2.innerHTML = "";

if (s1.value == "IPA") 
{
    var optionArray = ['IPA 1|IPA 1', 'IPA 2|IPA 2', 'IPA 3|IPA 3', 'IPA 4|IPA 4', 'IPA 5|IPA 5', 'IPA 6|IPA 6'];

}
else if (s1.value == "IPS")
{
    var optionArray = ['IPS 1|IPS 1', 'IPS 2|IPS 2', 'IPS 3|IPS 3'];
}

else {
    var optionArray = ['BAHASA|BAHASA'];
}

for (var option in optionArray){
    var pair = optionArray[option].split("|");
    var newoption = document.createElement("option");

    newoption.value += pair[0];
    newoption.innerHTML += pair[1];
    s2.options.add(newoption);
}
}
