@extends('layouts.masterLayout.home')

@section('content')
	<style>
		#messageArea{
			margin-top:157px;
		}
	</style>
	<div class="main-content-area clearfix" id="messageArea">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
     	<section class="section-padding ">
	      	@if(Session::has('contactSuccess'))
	      		<div id="contactSuccessMessage" class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4">
	     			तपाइको संदेश प्राप्त भयो l धन्यबाद ! 
	       		</div>
	      	@endif
    	
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-lg-offset-2">
                        
                           <h2 class="text-center">सर्त तथा अवस्था (Terms & Conditions)</h2>
                           <ol>
                           	<li>सुनवल नगर डट कम (www.sunwalnagar.com) मा हजुरलाई हार्दिक स्वागत छ l अनि प्रयोग गर्नु भएकोमा धन्यबाद !</li>
                           	<li>तपाइले यो वेबसाइट प्रयोग गर्दा यस संग सम्बन्धित वेबसाइट, फेसबुक पेज, मोबाइल तथा अन्य एप्लिकेसनका सर्त तथा अवस्था संग मन्जुर भएको मानिने छ l </li>
                           	<li>यदि तपाईले यसका सर्त तथा अवस्थाहरु नबुझ्नुभएमा, अपुर्ण बुझेमा अथवा मन्जुर नहुनु भएमा यो वेबसाइट प्रयोग गर्नुहुदैन l </li>
                           	<li>यो वेबसाइटमा प्रकाशित कुनै पनि सामाग्रीहरु प्रति प्रकाशित गर्ने व्यक्ति स्वयम् नै जिम्मेवार हुनेभएको ले यो वेबसाइट संचालक, यस संग सम्बन्धित कुनै पनि व्यक्ति जिम्मेवार हुनेछैन र त्यसबाट प्रयोगकर्तालाई हुन गएको कुनै पनि हानी नोक्सानी अथवा क्षति प्रति कुनै पनि प्रकारको जिम्मेवारी हुनेछैन l</li>
                           	<li>हामी प्रयोगकर्ताको बिवरणको सुरक्षा प्रति सधै सजग छौ l यदि  कुनै कारणबाट यो वेबसाइट प्रयोगकर्ताको बिवरण चोरी भएमा, नस्ट भएमा अथवा कुनै हेरफेर भएमा हामी जवाफदेही हुनेछैनौ l</li>
                           	<li>यो वेबसाइट प्रयोगकर्ताको व्यक्तिगत बिवरण हाम्रा अन्य आन्तरिक प्रयोजनको लागी पनि प्रयोग गर्न सक्नेछौ l</li>
                           	<li>यो वेब्साइटमा प्रकाशित सम्पुर्ण बिवरणहरु अधावाधिक तथा सत्य नहुन पनि सक्ने भएकोले प्रयोगकर्ता स्वयमले कुनै निर्णय गर्नुपूर्व आवस्यक सोध खोज गर्नुपर्नेछ l</li>
                           	<li>यो वेबसाइटका सर्त तथा अवस्थाहरु प्रयोगकर्तालाई पूर्व जानकारी नदिएकन पनि फेरबदल हुन सक्छन l  त्यसैले समय समयमा हेर्दै गर्नुहोला l</li>

                           </ol>
							
                           

                        
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
     </div>

@endsection