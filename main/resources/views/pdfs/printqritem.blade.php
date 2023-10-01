<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Templete</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <style type="text/css">
  
    div.noticia {
      text-align: center !important;
      width: 6rem;
      box-sizing: border-box;
      box-sizing: content-box;
    }
    
    div.noticia2 {
      text-align: center !important;
      width: 5.8rem;
      box-sizing: border-box;
      box-sizing: content-box;
    }
    
    p {
    width: 100px;
    font-size: 8pt; font-family: Arial, Helvetica, sans-serif;
    white-space: nowrap;
    overflow: hidden;
    margin-top: -10px;
    }
    
    .overflow-visible {
    white-space: initial;
    }
    
    div.noticia img.derecha {
      margin: -5px 0 !important;
    }

    .long-name-row {
        /*margin: 90px !important; */
    }

  </style>
</head>

<body width="100%" style=" text-align: center !important; margin: 10px -30px -10px -14px !important; padding: -10px !important ; font-size: 12pt;  line-height: .9; font-family: Arial, Helvetica, sans-serif;">

  <table width="100% ">
    <tbody >
     
  <tr style="vertical-align: top; height: 110px !important; padding-bottom: 10px;">
    
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    
    </tr>
    @if(strlen($elemetn->name) <= 20)
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    @endif
 <tr style="vertical-align: top; height: 110px !important; padding-bottom: 10px;">
    
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    
    </tr>    
    @if(strlen($elemetn->name) <= 20)
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    @endif
 <tr style="vertical-align: top; height: 110px !important; padding-bottom: 10px;">
    
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    
    </tr>     @if(strlen($elemetn->name) <= 20)
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    @endif
 <tr style="vertical-align: top; height: 110px !important; padding-bottom: 10px;">
    
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    
    </tr>
    @if(strlen($elemetn->name) <= 20)
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
   
    @endif
 <tr style="vertical-align: top; height: 110px !important; padding-bottom: 10px;">
    
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    
    </tr>
    @if(strlen($elemetn->name) <= 20)
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    @endif
 <tr style="vertical-align: top; height: 110px !important; padding-bottom: 10px;">
    
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    
    </tr>
    @if(strlen($elemetn->name) <= 20)
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    @endif
    
 <tr style="vertical-align: top; height: 110px !important; padding-bottom: 10px;">
    
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    
    </tr>
    @if(strlen($elemetn->name) <= 20)
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    <tr class="long-name-row">
    <td colspan="6"><p></p></td> 
    </tr>
    @endif
    
 <tr style="vertical-align: top; height: 110px !important; padding-bottom: 10px;">
    
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    <td style="vertical-align: top; height: 110px !important; " >
    <div class="noticia">
    <img class="derecha" width="112px" src="{{asset('/imgs/items/'.$elemetn->qr.'.png')}}" alt="">
    <p class="overflow-visible" style=" font-size: 8pt; font-family: Arial, Helvetica, sans-serif;">{{$elemetn->name}}</p>  
    <p  style=" font-size: 7pt; font-family: Arial, Helvetica, sans-serif;"></p>  
    </div>
    </td>
    
    </tr>    </tbody>
  </table>

</body>

</html>