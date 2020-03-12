<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculate extends CI_Controller {
  public $viewFolder="";

  public function __construct() {

      parent::__construct();
      $this->viewFolder = "urun";
      $this->load->model("main_model");
  }

    public function index()
	{
        /*$viewData = new stdClass();

        $items = array();
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        //$viewData->viewFolder = $this->viewFolder;
        //$viewData->items = $items;

       // $this->load->view("{$viewData->viewFolder}/index", $viewData);
    }
    public function calc($post_id){



        $inpPanelHeight = "16";
        $inpPanelWidth = "32";
        $slcPanelHeight = str_replace(",",".",$this->input->post("yukseklik"));
        $slcPanelWidth =  str_replace(",",".",$this->input->post("genislik"));
        /*$slcPanelHeight = str_replace(",",".",$this->input->post("yukseklik"));
        $slcPanelWidth =  str_replace(",",".",$this->input->post("genislik"));*/
        if($slcPanelHeight=="" || !isset($slcPanelHeight) || $slcPanelHeight=="0")
            return;
        $slcPanelHeight = number_format($i, 2,'.',',');
        $slcPanelWidth = number_format($i, 2,'.',',');
        $inpPanelAdaptorSize = 8;
        $inpPixels = 512;
        $inpPanelMM = 10;

        $panelHeightSize = $slcPanelHeight / $inpPanelHeight;
        $panelWidthSize = $slcPanelWidth / $inpPanelWidth;



        $usingPanelSize = $panelHeightSize * $panelWidthSize;
        //echo "PanelSize: ".$usingPanelSize."<br>";

        $pixelCalculate = $inpPixels * $usingPanelSize;
        //echo "Piksel - ".$pixelCalculate."<br>";

        $adaptorSize = $usingPanelSize / $inpPanelAdaptorSize;
        $adaptorSize = floor($adaptorSize);


        if ($adaptorSize < 1) {
            $adaptorSize = 1;
        }
        else {
            $adaptorMode = $usingPanelSize % $inpPanelAdaptorSize;

            if ($adaptorMode > 0)
                $adaptorSize += 1;
        }
        //echo "adaptör sayısı - ".$adaptorSize."<br>";


        $cardType = "";
        $cardPrice = 0;
        $cardId = 0;
        $panelHeightRow = floor($slcPanelHeight / $inpPanelHeight);
        //echo "panel yüksekliği - ".$panelHeightRow;

        if ($pixelCalculate > 0 && $pixelCalculate <= 17500 && $panelHeightRow <= 4) {
            $cardType = "D10";
        }
        else if ($pixelCalculate > 0 && $pixelCalculate <= 55000 && $panelHeightRow == 5) {
            $cardType = "D30";
        }
        else if ($pixelCalculate > 0 && $pixelCalculate <= 99000 && $panelHeightRow > 5 && $panelHeightRow <= 10) {
            $cardType = "C10C";
        }
        else if ($pixelCalculate > 0 && $pixelCalculate <= 17500) {
            $cardType = "D10";

            if ($panelHeightRow == 5) {
                $cardType = "D30";
            } else if ($panelHeightRow > 5) {
                $cardType = "C10C ";
            }
            //cardPrice = parseFloat($('#inpC10CAmount').val()).toFixed(2);
        }

        else if ($pixelCalculate > 17501 && $pixelCalculate <= 55000 && $panelHeightRow <= 5) {
            $cardType = "D30";
        }
        else if ($pixelCalculate > 17501 && $pixelCalculate <= 55000 && $panelHeightRow > 5 && $panelHeightRow <= 10) {
            $cardType = "C10C";
        }
        else if ($pixelCalculate > 17501 && $pixelCalculate <= 55000 && $panelHeightRow > 10) {
            $cardType = "C30";
            //cardPrice = parseFloat($('#inpC30Amount').val()).toFixed(2);
        }

        else if ($pixelCalculate > 55000 && $pixelCalculate <= 99000 && $panelHeightRow <= 10) {
            $cardType = "C10C";
        }
        else if ($pixelCalculate > 55000 && $pixelCalculate <= 99000 && $panelHeightRow > 10) {
            $cardType = "C30";
        }
        else if ($pixelCalculate > 99000 && $pixelCalculate <= 200000) {
            $cardType = "C30";
        }
        else if ($pixelCalculate > 200000 && $pixelCalculate <= 400000) {
            $cardType = "A601";
        }
        else if ($pixelCalculate > 400000 && $pixelCalculate <= 750000) {
            $cardType = "A602";
        }
        else {
            $cardType = "A603";
        }

      //  echo "<br>".$cardType;

        $rPanel = 0;
        $kasaMetre = ceil((($slcPanelHeight * $slcPanelWidth) / 100) / 100);
        if ($pixelCalculate > 99000) {
                    //r501 çekilecek
                    $rPanel =$kasaMetre * $this->getCardPrice("R501");
                    $this->cardAmount($slcPanelHeight, $slcPanelWidth, $inpPixels, $cardType, $usingPanelSize, $adaptorSize, $cardPrice, $kasaMetre, $rPanel, $pixelCalculate, $inpPanelHeight, $inpPanelWidth, $inpPanelMM, $cardId,$post_id);
         }
         else {
            $kasaMetre = 0;
            $this->cardAmount($slcPanelHeight, $slcPanelWidth, $inpPixels, $cardType, $usingPanelSize, $adaptorSize, $cardPrice, $kasaMetre, $rPanel, $pixelCalculate, $inpPanelHeight, $inpPanelWidth, $inpPanelMM, $cardId,$post_id);
         }

       // echo $h*$inpPanelHeight;
    }
    public function cardAmount($slcPanelHeight, $slcPanelWidth, $inpPixels, $cardType, $usingPanelSize, $adaptorSize, $cardPrice, $kasaMetre, $rPanel, $pixelCalculate, $inpPanelHeight, $inpPanelWidth, $inpPanelMM, $cardId,$post_id) {

        //card fiyatını çek

        $cardPrice = $this->getCardPrice($cardType);;
       // echo "kart price".$cardPrice;
        //cardPrice = parseFloat(cardPrice) + parseFloat(rPanel);

        $tvProductAmount = 0;
        $this->calculatePanel($slcPanelHeight, $slcPanelWidth, $inpPixels, $cardType, $usingPanelSize, $adaptorSize, $cardPrice, $kasaMetre, $rPanel, $tvProductAmount, $pixelCalculate, $inpPanelHeight, $inpPanelWidth, $inpPanelMM,$post_id);
        /*if ($('#tvCheck').is(":checked")) {
            //2581 çekilecek
                    tvProductAmount = parseFloat(data).toFixed(2);
                    calculatePanel($slcPanelHeight, $slcPanelWidth, inpPixels, cartType, usingPanelSize, adaptorSize, cardPrice, kasaMetre, rPanel, tvProductAmount, pixelCalculate, inpPanelHeight, inpPanelWidth, inpPanelMM);
                });
            $('#canliYayin').show();
        } else {
            calculatePanel($slcPanelHeight, $slcPanelWidth, inpPixels, cartType, usingPanelSize, adaptorSize, cardPrice, kasaMetre, rPanel, tvProductAmount, pixelCalculate, inpPanelHeight, inpPanelWidth, inpPanelMM);
            $('#canliYayin').hide();
        }*/
    }
    public function calculatePanel($slcPanelHeight, $slcPanelWidth, $inpPixels, $cartType, $usingPanelSize, $adaptorSize, $cardPrice, $kasaMetre, $rPanel, $tvProductAmount, $pixelCalculate, $inpPanelHeight, $inpPanelWidth, $inpPanelMM,$post_id) {
        $kasaPrice = 40; // inpKasaAmount

        $priceCalculate = (($slcPanelHeight * $slcPanelWidth) / 10000) * $kasaPrice;
        $adaptorPrice = $adaptorSize*30; // adaptor amount çekiecek
        $panelPrice = ($usingPanelSize * 11); // 11 => inpPanelAmount
        $totalAmount = $tvProductAmount + $panelPrice + $adaptorPrice + $priceCalculate + $cardPrice + $rPanel;
        $commission = ($totalAmount / 100) * 35;
        $totalAmount += $commission;

        //echo "total ------- ".$totalAmount;

        $ledEkranTutar = $totalAmount - $adaptorPrice - $cardPrice;
        $pdfEkranCalc = $slcPanelHeight." x ".$slcPanelWidth." cm";
        $pdfModulCalc = $inpPanelHeight." x ".$inpPanelWidth." cm";
        $pdfModulPixel = $inpPixels." Piksel";
        $url = 'http://localhost/htmltopdf/index.php';

        $fields = array(
            'postid'=>$post_id,
            'totalAmount' => $totalAmount,
            'ekranOlcusu'=>$pdfEkranCalc,
            'ekranMm'=> $inpPanelMM,
            'modulOlcusu'=> $pdfModulCalc,
            'ModulCozunurlugu'=> $pdfModulPixel,
            'kontrolKarti' => $cartType,
            'adaptorAdet' => $adaptorSize,
            'adaptorPrice' => $adaptorPrice,
            'kontrolKartTutar' => $cardPrice,
            'kontrolKartiAciklama' => $cartType,
            'recevierKartAdet' => $kasaMetre,
            'recevierKartTutar' => $rPanel,
            'ledEkranTutar' => $ledEkranTutar
        );

        $fields_string = http_build_query($fields);

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        $result = curl_exec($ch);

        curl_close($ch);
        $pdfPath = $result;

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "";
        $header = $this->main_model->get_all(
            array("type" => "head"), "menu_id ASC","menu"
        );
        $footer = $this->main_model->get_all(
            array("type" => "footer"), "menu_id ASC","menu"
        );
        $kategori = $this->main_model->get(
            array("id" =>$post_id ), "category"

        );
         $kategoriListe = $this->main_model->get_all(
            array(), "id ASC" ,"category"

        );
          $posts = $this->main_model->get(
            array("post_id" => $post_id),"posts"
        );
          $posts_data = $this->main_model->get(
            array("post_id" => $post_id),"post_data"
        );
        $ayarlar = $this->main_model->get(
            array(),"ayarlar"
        );
        $thumbnail = $this->main_model->get(
            array("post_id" => $post_id,"type"=>"kapak"),"pictures"
        );
        $pictures = $this->main_model->get_all(
            array("post_id" => $post_id,"type"=>"normal"),"pictures_id ASC","pictures"
        );
        $items = array(
            "ayarlar" => $ayarlar,
            "header" => $header,
            "footer" => $footer,
            "categoryInfo" => $kategori,
            "categoryList" =>$kategoriListe,
            "post"         => $posts,
            "post_data" => $posts_data,
            "thumbnail" => $thumbnail,
            "pictures"=>$pictures,
            "pdfpath" =>$pdfPath
        );


        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->items = $items;

        $etc = $this->load->view("{$viewData->viewFolder}/index", $viewData,false);
       echo $etc;
       //echo $render_html;
        //$viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        //$viewData->viewFolder = $this->viewFolder;
        //$viewData->items = $items;

        //$this->load->view("{$viewData->viewFolder}/index", $viewData,true);
       /*var pdfHead = $('.product_price h4:first-child').html();
        var pdfEkranCalc = $slcPanelHeight + " x " + $slcPanelWidth + " cm";
        var pdfModulCalc = inpPanelHeight + " x " + inpPanelWidth + " cm";
        var pdfModulPixel = inpPixels + " Piksel";
        var pdfmetrepix = parseInt($('#inpPanelMetrePixel').val()) * inpPixels + " Pikseldir.";



        var data = {
            productName: pdfHead + " " + pdfEkranCalc,
            ekranOlcusu: pdfEkranCalc,
            ekranMm: inpPanelMM,
            modulOlcusu: pdfModulCalc,
            ModulCozunurlugu: pdfModulPixel,
            m2PikselSayısı: pdfmetrepix,
            kontrolKarti: cartType,
            ledEkranAciklama: pdfEkranCalc,
            ledEkranAdet: "1", /*usingPanelSize*/
            /*---burada tekrarledEkranTutar: parseFloat(parseFloat(panelPrice) + parseFloat(priceCalculate)).toFixed(2),
            kontrolKartiAciklama: cartType,
            kontrolKartAdet: 1, // parseInt(adaptorSize)
            kontrolKartTutar: parseFloat(cardPrice).toFixed(2),
            recevierKartAdet: kasaMetre,
            recevierKartTutar: rPanel.toFixed(2),
            videoProcessorAdet: "0",
            videoProcessorTutar: "0",
            ozetBilgi: pdfEkranCalc,
            tutar: "",
            adaptorAdet: parseInt(adaptorSize),
            adaptorPrice: parseFloat(adaptorPrice).toFixed(2),
            tvCheck: $('#tvCheck').is(":checked")
        };*/
    }
    public function getCardPrice($cardName){
        $kategori = $this->main_model->get(
            array("name" =>$cardName ), "cards"
        );
        return $kategori->price;
    }
}
