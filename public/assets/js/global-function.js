function getUploadFile(url, module, thmb, data){
  var result;
  data = data.trim();
  if(data != ""){
    switch (module) {
      case "admin":
      result = url+"uploads/admin/"+thmb+data;
      break;
      case "brand":
      result = url+"uploads/brand/"+thmb+data;
      break;
      case "user":
      result = url+"uploads/user/"+thmb+data;
      break;
      case "customer":
      result = url+"uploads/customer/"+thmb+data;
      break;
      case "homepage":
      result = url+"uploads/homepage/"+thmb+data;
      break;
      case "news":
      result = url+"uploads/news/"+thmb+data;
      break;
      case "component":
      result = url+"uploads/component/"+thmb+data;
      break;
      case "warranty_receipt":
      result = url+"uploads/warranty-receipt/"+thmb+data;
      break;
      case "product":
      result = url+"uploads/product/"+thmb+data;
      break;
      default:
      result = url+"img/placeholder-image.png";
      break;
    }
  }else{
    result = url+"img/placeholder-image.png";
  }
  return result;
}

function formatDatePicker(param) {
  var date = new Date(param);
  var monthNames = [
  "Jan", "Feb", "Mar",
  "Apr", "May", "Jun", "Jul",
  "Aug", "Sep", "Oct",
  "Nov", "Dec"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear().toString().substr(-2);
  var hour = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  return day + "-" + monthNames[monthIndex] + "-" + year;
}

function formatDateDefault(param) {
  var date = new Date(param);
  var monthNames = [
  "Jan", "Feb", "Mar",
  "Apr", "May", "Jun", "Jul",
  "Aug", "Sep", "Oct",
  "Nov", "Dec"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear();
  var hour = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  return day + "-" + monthNames[monthIndex] + "-" + year;
}

function formatDateHours(param,ampm=false, at=false) {
  var date = new Date(param);
  var monthNames = [
  "Jan", "Feb", "Mar",
  "Apr", "May", "Jun", "Jul",
  "Aug", "Sep", "Oct",
  "Nov", "Dec"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();
  var mid ="";
  if(ampm==true){
    _time = (hours > 12) ? (hours-12 + ':' + minutes +' PM') : (hours + ':' + minutes +' AM');
  }else{
    _time = (hours > 12) ? (hours-12 + ':' + minutes) : (hours + ':' + minutes);
  }
  if(at==true){
    _at = " at ";
  }else{
    _at = " ";
  }
  
  
  return day + " " + monthNames[monthIndex] + " " + year + _at + _time;
}

function formatDateComplete(param) {
  var date = new Date(param);
  var monthNames = [
  "January", "February", "March",
  "April", "May", "June", "July",
  "August", "September", "October",
  "November", "December"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear().toString();
  var hour = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  return day + " " + monthNames[monthIndex] + " " + year;
}

function toRp(angka){
  var rev = parseInt(angka, 10).toString().split("").reverse().join("");
  var rev2 = "";
  for(var i = 0; i < rev.length; i++){
    rev2  += rev[i];
    if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
      rev2 += ".";
    }
  }
  return "Rp "+rev2.split("").reverse().join("");
}

function sizeFile(file){
  return file.value != "" ? file.files[0].size : "";
}

function checkFormatImage(value){
  var val = value.toLowerCase();
  var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
  if(!(regex.test(val))){
    return false;
  }else{
    return true;
  }
}

function getMilliseconds(str_date){
  var date = new Date(str_date); // some mock date
  var milliseconds = date.getTime();
  return milliseconds;
}

//success alert
function successAlert(text){
  Command: toastr["success"](text)
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "500",
    "timeOut": "3000",
    "extendedTimeOut": "500",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
}
//error alert
function errorAlert(text){
  Command: toastr["error"](text)
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
}

/*var counter = 1;
var limit = 6;
var num = 1;

function addInput(divName){
  if (counter == limit) {
    alert("You may upload as many photos as you like, but you can only upload "+counter+" photos at a time.");
  }
  else {
    var newdiv = document.createElement('div');
    newdiv.id = "Photo"+ (num + 1);
    newdiv.innerHTML += "<br><input name='photo[]' type='file' class='file' style='display:inline-block;' />";
    newdiv.innerHTML += "<a href='#js' title='remove field' onClick=\"removeInput('Photo" + (num + 1) + "');\" ><i class='fa fa-remove' style='color:#444;'></i></a>";
    document.getElementById(divName).appendChild(newdiv);
    counter++;
    num++;
  }
}

function removeInput(childId){
  var ele = document.getElementById(childId);
  var parentEle = document.getElementById('photoField');
  parentEle.removeChild(ele);
  counter--;
}*/

var counter = 1;
var limit = 5;
var num = 1;

function addInput(divName){
  $("#error-photo").html("");
  $("#error-photo").hide();
  $("#input-photo").removeClass("input-error");
  if (counter == limit){
    alert("Anda dapat mengunggah sebanyak mungkin gambar yang anda suka, tetapi anda hanya dapat mengunggah "+counter+" gambar saat ini.");
  } else {
    var newdiv = document.createElement('div');
    newdiv.id = "Photo"+ (num + 1);
    newdiv.className = "item-field";
    newdiv.innerHTML = "<br/>";
    newdiv.innerHTML += "<div class='hide photo-number'></div>";
    newdiv.innerHTML += "<input id='input-photo-"+(num + 1)+"' name='photo[]' type='file' class='file item-photo' style='display:inline-block;' onchange='checkSizeFile("+(num + 1)+")' /></div>";
    newdiv.innerHTML += "<input id='input-photo-size-"+(num + 1)+"' type='hidden' class='item-photo-size'>";
    newdiv.innerHTML += "<a href='#js' class='delete-line' title='remove field' onclick=\"removeInput('Photo" + (num + 1) + "');\" ><i class='fa fa-remove' style='color:#444;'></i></a>";
    document.getElementById(divName).appendChild(newdiv);
    counter++;
    num++;
  }
  resetInput();
}

function removeInput(childId){
  var ele = document.getElementById(childId);
  var parentEle = document.getElementById('photoField');
  parentEle.removeChild(ele);
  counter--;
  resetInput();
}

function resetInput(){
  var cssr = $('.delete-line');
  var item_field = $('.item-field');
  var item_photo = $('.item-photo');
  var item_photo_size = $('.item-photo-size');
  var css = $('.photo-number');
  var el = css.length;
  var num = 1;
  for(var i = 0; i < el; i++){
    $(item_field[i]).attr('id', 'Photo'+num);
    $(item_photo[i]).attr('id', 'input-photo-'+num);
    $(item_photo[i]).attr('onchange', 'checkSizeFile('+num+');');
    $(item_photo_size[i]).attr('id', 'input-photo-size-'+num);
    $(cssr[i]).attr('onclick', 'removeInput(\'Photo'+num+'\');');
    num++;
  }
}

// Start Function Upload Multiple Receipt
var ReceiptCounter = 1;
var Receiptlimit = 5;
var ReceiptNum = 1;

function addInputReceipt(divName){
  $("#error-receipt-photo").html("");
  $("#error-receipt-photo").hide();
  $("#input-receipt-photo").removeClass("input-error");
  if (ReceiptCounter == Receiptlimit){
    alert("Anda dapat mengunggah sebanyak mungkin gambar yang anda suka, tetapi anda hanya dapat mengunggah "+ReceiptCounter+" gambar saat ini.");
  } else {
    var newdiv = document.createElement('div');
    newdiv.id = "Photo"+ (ReceiptNum + 1);
    newdiv.className = "item-field";
    newdiv.innerHTML = "<br/>";
    newdiv.innerHTML += "<div class='hide photo-ReceiptNumber'></div>";
    newdiv.innerHTML += "<input id='input-receipt-photo-"+(ReceiptNum + 1)+"' name='receipt_photo[]' type='file' class='file item-receipt-photo' style='display:inline-block;' onchange='checkSizeFile("+(ReceiptNum + 1)+")' /></div>";
    newdiv.innerHTML += "<input id='input-receipt-photo-size-"+(ReceiptNum + 1)+"' type='hidden' class='item-receipt-photo-size'>";
    newdiv.innerHTML += "<a href='#js' class='delete-line' title='remove field' onclick=\"removeInputReceipt('Photo" + (ReceiptNum + 1) + "');\" ><i class='fa fa-remove' style='color:#444;'></i></a>";
    document.getElementById(divName).appendChild(newdiv);
    ReceiptCounter++;
    ReceiptNum++;
  }
  resetInputReceipt();
}

function removeInputReceipt(childId){
  var ele = document.getElementById(childId);
  var parentEle = document.getElementById('receipt-photoField');
  parentEle.removeChild(ele);
  ReceiptCounter--;
  resetInputReceipt();
}

function resetInputReceipt(){
  var cssr = $('.delete-line');
  var item_field = $('.item-field');
  var item_photo = $('.item-receipt-photo');
  var item_photo_size = $('.item-receipt-photo-size');
  var css = $('.photo-ReceiptNumber');
  var el = css.length;
  var ReceiptNum = 1;
  for(var i = 0; i < el; i++){
    $(item_field[i]).attr('id', 'Photo'+ReceiptNum);
    $(item_photo[i]).attr('id', 'input-receipt-photo-'+ReceiptNum);
    $(item_photo[i]).attr('onchange', 'checkSizeFile('+ReceiptNum+');');
    $(item_photo_size[i]).attr('id', 'input-receipt-photo-size-'+ReceiptNum);
    $(cssr[i]).attr('onclick', 'removeInputReceipt(\'Photo'+ReceiptNum+'\');');
    ReceiptNum++;
  }
}
// End Function Upload Receipt


// Start Function Upload Product
var ProductCounter = 1;
var Productlimit = 5;
var ProductNum = 1;

function addInputProduct(divName){
  $("#error-product-photo").html("");
  $("#error-product-photo").hide();
  $("#input-product-photo").removeClass("input-error");
  if (ProductCounter == Productlimit){
    alert("Anda dapat mengunggah sebanyak mungkin gambar yang anda suka, tetapi anda hanya dapat mengunggah "+ProductCounter+" gambar saat ini.");
  } else {
    var newdiv = document.createElement('div');
    newdiv.id = "Photo"+ (ProductNum + 1);
    newdiv.className = "item-field";
    newdiv.innerHTML = "<br/>";
    newdiv.innerHTML += "<div class='hide photo-ProductNumber'></div>";
    newdiv.innerHTML += "<input id='input-product-photo-"+(ProductNum + 1)+"' name='product_photo[]' type='file' class='file item-product-photo' style='display:inline-block;' onchange='checkSizeFile("+(ProductNum + 1)+")' /></div>";
    newdiv.innerHTML += "<input id='input-product-photo-size-"+(ProductNum + 1)+"' type='hidden' class='item-product-photo-size'>";
    newdiv.innerHTML += "<a href='#js' class='delete-line' title='remove field' onclick=\"removeInputProduct('Photo" + (ProductNum + 1) + "');\" ><i class='fa fa-remove' style='color:#444;'></i></a>";
    document.getElementById(divName).appendChild(newdiv);
    ProductCounter++;
    ProductNum++;
  }
  resetInputProduct();
}

function removeInputProduct(childId){
  var ele = document.getElementById(childId);
  var parentEle = document.getElementById('product-photoField');
  parentEle.removeChild(ele);
  ProductCounter--;
  resetInputProduct();
}

function resetInputProduct(){
  var cssr = $('.delete-line');
  var item_field = $('.item-field');
  var item_photo = $('.item-product-photo');
  var item_photo_size = $('.item-product-photo-size');
  var css = $('.photo-ProductNumber');
  var el = css.length;
  var ProductNum = 1;
  for(var i = 0; i < el; i++){
    $(item_field[i]).attr('id', 'Photo'+ProductNum);
    $(item_photo[i]).attr('id', 'input-product-photo-'+ProductNum);
    $(item_photo[i]).attr('onchange', 'checkSizeFile('+ProductNum+');');
    $(item_photo_size[i]).attr('id', 'input-product-photo-size-'+ProductNum);
    $(cssr[i]).attr('onclick', 'removeInputProduct(\'Photo'+ProductNum+'\');');
    ProductNum++;
  }
}

// End Function Upload Product

function ConverDateStringToDate(param) {
  var arr = param.split('-');
  switch (arr[1]) {
    case "Jan":
    month = "01";
    break;
    case "Feb":
    month = "02";
    break;
    case "Mar":
    month = "03";
    break;
    case "Apr":
    month = "04";
    break;
    case "May":
    month = "05";
    break;
    case "Jun":
    month = "06";
    break;
    case "Jul":
    month = "07";
    break;
    case "Aug":
    month = "08";
    break;
    case "Sep":
    month = "09";
    break;
    case "Oct":
    month = "10";
    break;
    case "Nov":
    month = "11";
    break;
    case "Dec":
    month = "12";
    break;
  }
  return arr[2] + "-" + month + "-" + arr[0];
}

function convertDateLong(fullDate){
  var twoDigitMonth = ("0" + (fullDate.getMonth() +1 )).slice(-2);
  var twoDigitDate  = ("0" + (fullDate.getDate() )).slice(-2);
  var currentDate = fullDate.getFullYear() + "-" + twoDigitMonth + "-" + twoDigitDate;
  return currentDate;
}


function charString(variable, length){
  variable = htmlspecialchars_decode(variable, 'ENT_QUOTES');
  var strDecode = strip_tags(variable,'<p>');
  strDecode = strip_tags(variable,'<div>');
  var strLength = strDecode.length;
  if(strLength > length){
    var result = strDecode.substr(0, length)+"...";
  } else {
    var result = strDecode;
  }
  return result;
}
function strip_tags(input, allowed){
  allowed = (((allowed || '') + '')
    .toLowerCase()
    .match(/<[a-z][a-z0-9]*>/g) || [])
  .join(''); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
  var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
  commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
  return input.replace(commentsAndPhpTags, '')
  .replace(tags, function($0, $1) {
    return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : '';
  });
}
function htmlspecialchars_decode(string, quote_style){
  var optTemp = 0,
  i = 0,
  noquotes = false;
  if (typeof quote_style === 'undefined') {
    quote_style = 2;
  }
  string = string.toString()
  .replace(/&lt;/g, '<')
  .replace(/&gt;/g, '>');
  var OPTS = {
    'ENT_NOQUOTES': 0,
    'ENT_HTML_QUOTE_SINGLE': 1,
    'ENT_HTML_QUOTE_DOUBLE': 2,
    'ENT_COMPAT': 2,
    'ENT_QUOTES': 3,
    'ENT_IGNORE': 4
  };
  if (quote_style === 0) {
    noquotes = true;
  }
  if (typeof quote_style !== 'number') { // Allow for a single string or an array of string flags
    quote_style = [].concat(quote_style);
    for (i = 0; i < quote_style.length; i++) {
      // Resolve string input to bitwise e.g. 'PATHINFO_EXTENSION' becomes 4
      if (OPTS[quote_style[i]] === 0) {
        noquotes = true;
      } else if (OPTS[quote_style[i]]) {
        optTemp = optTemp | OPTS[quote_style[i]];
      }
    }
    quote_style = optTemp;
  }
  if (quote_style & OPTS.ENT_HTML_QUOTE_SINGLE) {
    string = string.replace(/&#0*39;/g, "'"); // PHP doesn't currently escape if more than one 0, but it should
    // string = string.replace(/&apos;|&#x0*27;/g, "'"); // This would also be useful here, but not a part of PHP
  }
  if (!noquotes) {
    string = string.replace(/&quot;/g, '"');
  }
  // Put this in last place to avoid escape being double-decoded
  string = string.replace(/&amp;/g, '&');

  return string;
}

function LabelTicketService(param) {
  switch (param) {
    case "registered":
    result = "Open Ticket";
    break;

    case "scheduled":
    result = "Scheduled";
    break;
    case "roc-ready":
    result = "ROC READY";
    break;
    case "roc-verified":
    result = "ROC VERIFIED";
    break;

    case "pick-up":
    result = "Pick Up";
    break;

    case "otw":
    result = "OTW";
    break;

    case "start-repair":
    result = "Start Repair";
    break;

    case "finish-repair":
    result = "Finish Repair";
    break;

    case "confirm-finish-repair":
    result = "Repair Accepted";
    break;

    case "generate-nota":
    result = "Repair Accepted";
    break;

    case "awaiting-payment":
    result = "Waiting Payment";
    break;

    case "awaiting-confirm-payment":
    result = "Waiting Check Payment";
    break;

    case "paid":
    result = "Service PAID";
    break;

    case "reoc":
    result = "Hand Over";
    break;


    case "completed":
    result = "Completed";
    break;

    case "cancel":
    result = "Cancel";
    break;

    case "pending":
    result = "Pending";
    break;

    default:
    result = "Open Ticket";
    break;
  }
  return result;
}


function ColorTicketService(status){
    
    switch (status) {
        case "registered":
            result = "#eb1962";
            break;

        case "scheduled":
            result = "#f7931e";
            break;
        case "roc-ready":
            result = "#f15722";
            break;
        case "roc-verified":
            result = "#458bca";
            break;

        case "pick-up":
            result = "#319fd9";
            break;

        case "otw":
            result = "#008f88";
            break;

        case "start-repair":
            result = "#ffc50b";
            break;

        case "finish-repair":
            result = "#ccdc29";
            break;

        case "confirm-finish-repair":
            result = "#8ac541";
            break;
        
        case "generate-nota":
            result = "#8ac541";
            break;

        case "awaiting-payment":
            result = "#924399";
            break;

        case "awaiting-confirm-payment":
            result = "#4454a4";
            break;

        case "paid":
            result = "#7b5647";
            break;

        case "reoc":
            result = "#9f9e9e";
            break;


        case "completed":
            result = "#008137";
            break;

        case "cancel":
            result = "#ff0000";
            break;
        
        case "pending":
            result = "#ffeb13";
            break;

        default:
            result = "#eb1962";
            break;
    }

    return  "style='color: #fff;background : "+result+"'";
}


function checkImg(data){
  var result;

  if(data != ""){
    result = "uploads/technician/thmb/"+data;
  }else{
    result = "img/placeholder-image.png";
  }
  return result;
}


function formatDatePickerYears(param) {
  var date = new Date(param);
  var monthNames = [
  "Jan", "Feb", "Mar",
  "Apr", "May", "Jun", "Jul",
  "Aug", "Sep", "Oct",
  "Nov", "Dec"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear();
  var hour = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  return day + "-" + monthNames[monthIndex] + "-" + year;
}

function borderTicket(data){
  var result;

  if(data == "survey"){
    result = "border: solid 5px #adff00;";
  }else if(data == "deletedRoc"){
    result = "border: solid 5px #ff0000;";
  }
  return result;
}