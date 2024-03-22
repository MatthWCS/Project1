/* Script de la fonctionnalité visuelle, sur la page div 1,div 2 */
function visual_query(url,id)
{
var visual_object = null;
var position = id;
if(window.XMLHttpRequest) visual_object = new XMLHttpRequest();
else
if (window.ActiveXObject) visual_object = new ActiveXObject("Microsoft.XMLHTTP" );

visual_object.open("GET", url, true);
visual_object.onreadystatechange = function(){
if ( visual_object.readyState == 4 )
{
document.getElementById(position).innerHTML = visual_object.responseText;
}
}
visual_object.send(null);
} 
/* fin du Script de la fonctionnalité visuelle */