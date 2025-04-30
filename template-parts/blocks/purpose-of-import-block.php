  <?php
    $title           = get_field('title');
    $subHeading     = get_field('sub_heading');
    $purpose           = get_field('purpose_of_import');
  ?>

    <section data-aos="zoom-in" class="purpose-of-import-section px-16 mob:px-4 my-24" id="purpose">
      <div class="container flex flex-col gap-8 items-center justify-center">
        <div class="flex flex-col justify-center items-center">
          <h2 class="text-[#3773C9] text-center md:text-[50px] text-[28px] leading-[150%] font-bold">
            <!-- الغرض من الاستيراد -->
              <?php echo !empty($title) ? esc_html($title) : 'الغرض من '; ?>

          </h2>
          <div class="relative w-full md:px-16 max-w-md mx-auto mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 386 41" fill="none" class="w-auto h-auto"
              preserveAspectRatio="xMidYMid meet">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M291.012 0.164153C236.744 0.630243 221.228 0.933445 191.118 2.11702C159.914 3.34358 137.583 4.57308 102.151 7.01539C93.9374 7.58157 85.1424 8.11889 74.8318 8.68429C36.9564 10.7612 29.5861 11.3146 17.342 13.0004C11.2754 13.8358 6.02883 14.414 3.0883 14.5716C0.473935 14.7115 0 14.7996 0 15.1456C0 15.4513 4.18131 15.7192 6.46831 15.5599C7.2879 15.503 9.50839 15.3634 11.4029 15.2502C13.2975 15.1368 17.4667 14.8324 20.6678 14.5737C28.2059 13.9644 31.8251 13.7722 44.7803 13.2936C66.5592 12.489 83.0115 11.7157 103.22 10.5471C110.668 10.1163 120.556 9.54445 125.195 9.27618C160.374 7.24128 203.345 5.42675 229.603 4.86764C261.467 4.18882 360.388 3.58869 358.717 4.08402C358.056 4.28047 346.736 5.74154 339.95 6.50652C333.717 7.20928 323.303 8.22291 310.492 9.37371C304.417 9.91967 296.078 10.6752 291.963 11.0528C276.501 12.4715 271.408 12.9115 262.624 13.5883C222.155 16.7062 195.423 19.423 158.216 24.1993C136.1 27.0382 117.973 30.2974 97.7436 35.0719C86.2423 37.7864 85.1217 38.2686 86.2537 40.0162C86.9904 41.1533 92.7935 41.3006 104.498 40.4793C125.888 38.9786 145.989 37.8147 165.461 36.9492C177.675 36.4064 179.293 36.3153 191.712 35.4726C196.35 35.1581 204.368 34.698 209.529 34.4508L218.913 34.0012L206.441 33.824C187.541 33.5553 167.268 33.5716 160.591 33.8608C138.487 34.8185 126.464 35.5556 106.825 37.1568C102.144 37.5385 98.1954 37.818 98.0496 37.778C96.6432 37.3906 128.122 31.5372 143.139 29.3938C177.038 24.5549 211.947 20.9445 265.593 16.7287C270.493 16.3437 280.328 15.5014 287.449 14.8571C294.57 14.2126 305.795 13.198 312.393 12.602C337.789 10.3084 345.356 9.45417 369.764 6.12481C385.396 3.99237 385.48 3.97413 385.906 2.57173C386.374 1.02981 385.122 0.330184 381.534 0.130207C378.126 -0.0599581 314.312 -0.036021 291.012 0.164153ZM219.925 33.8455C220.221 33.8924 220.648 33.8907 220.875 33.8416C221.102 33.7925 220.861 33.7541 220.338 33.7562C219.815 33.7584 219.63 33.7986 219.925 33.8455Z"
                fill="#E19B1B" />
            </svg>
          </div>
        </div>
    
        <p class="leading-10 md:w-2/3 text-[#2C5CA1] text-[18px] md:text-[24px] font-semibold mb-20 mob:mb-8 text-center">
         <?php echo !empty($subHeading) ? esc_html($subHeading) : 'سواء كنت فردًا، تاجرًا، أو صاحب مصنع، نحن نقدم لك حلول استيراد متكاملة تناسب احتياجاتك، بأفضل الأسعار وأعلى جودة اختر غرض الاستيراد وابدأ طلبك'; ?>
        </p>
      </div>
    
      <div class="mob:hidden justify-center items-center">
        <!-- Tabs -->
        <div class="flex flex-row gap-[60px] mob:gap-4 justify-center mb-[62px] mob:flex-col">
          <button
            class="flex justify-center items-center flex-col gap-[22px] tab-btn px-8 py-3 rounded-xl border border-[#3773C9] bg-[#EBF1FA] text-[#3268B5] shadow-sm transition active-tab"
            data-target="tab-personal">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M30 4.02502L52.5 17.0154V42.9962L30 55.9865L7.5 42.9962V17.0154L30 4.02502ZM22.4999 28.2732L22.5 45.8831L27.5 48.77V31.16L22.4999 28.2732ZM12.5 22.5V40.1094L17.5 42.9963V25.3867L12.5 22.5ZM39.8427 15.4812L25.1265 24.0166L30 26.8303L44.75 18.3144L39.8427 15.4812ZM30 9.7985L15.25 18.3145L20.1322 21.1331L34.8485 12.5978L30 9.7985Z"
                fill="currentColor" />
            </svg>
            <span class="text-[24px] mob:text-[20px] md:text-[30px] font-bold leading-10">الاستيراد الشخصى</span>
          </button>
    
          <button
            class="flex justify-center items-center flex-col gap-[22px] tab-btn px-8 py-3 rounded-xl border border-[#3773C9] bg-[#EBF1FA] text-[#3268B5] shadow-sm transition"
            data-target="tab-trade">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
              <path
                d="M57.0938 11.7378L37.5 25.7904V13.9297C37.5012 13.542 37.4017 13.162 37.2131 12.8336C37.0244 12.5053 36.7544 12.2422 36.4344 12.0749C36.1143 11.9075 35.7574 11.8429 35.405 11.8884C35.0526 11.9338 34.7193 12.0876 34.4438 12.3319L22.6312 23.1273H15V2.76545L3.75 0V23.1273H0V57.9515C0 58.4948 0.197544 59.0159 0.549175 59.4C0.900805 59.7842 1.37772 60 1.875 60H58.125C58.6223 60 59.0992 59.7842 59.4508 59.4C59.8025 59.0159 60 58.4948 60 57.9515V13.438C59.9983 13.0691 59.9054 12.7076 59.7311 12.3916C59.5569 12.0756 59.3078 11.8169 59.0101 11.6427C58.7125 11.4686 58.3773 11.3855 58.04 11.4022C57.7027 11.419 57.3757 11.5349 57.0938 11.7378ZM22.5 53.8546H7.5V49.7576H22.5V53.8546ZM22.5 45.6606H7.5V41.5637H22.5V45.6606ZM22.5 37.4667H7.5V33.3698H22.5V37.4667ZM37.5 53.8546H33.75V47.7091H37.5V53.8546ZM37.5 41.5637H33.75V35.4182H37.5V41.5637ZM45 53.8546H41.25V47.7091H45V53.8546ZM45 41.5637H41.25V35.4182H45V41.5637ZM52.5 53.8546H48.75V47.7091H52.5V53.8546ZM52.5 41.5637H48.75V35.4182H52.5V41.5637Z"
                fill="currentColor" />
            </svg>
            <span class="text-[24px] mob:text-[20px] md:text-[30px] font-bold leading-10">الاستيراد الصناعي</span>
          </button>
          <button
            class="flex justify-center items-center flex-col gap-[22px] tab-btn px-8 py-3 rounded-xl border border-[#3773C9] bg-[#EBF1FA] text-[#3268B5] shadow-sm transition"
            data-target="tab-industrial">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
              <path
                d="M51.4307 59.1C51.4307 58.9383 51.3862 58.7796 51.3021 58.6407C51.2179 58.5017 51.0972 58.3876 50.9526 58.3105C47.327 56.3959 44.0202 53.4655 42.5657 51.9944C42.3496 51.7718 42.0612 51.6301 41.7503 51.5939C41.4393 51.5576 41.1252 51.629 40.862 51.7957C34.1212 56.0617 25.9138 56.0643 19.1716 51.8023C18.9061 51.6339 18.589 51.5622 18.2753 51.5997C17.9616 51.6372 17.6712 51.7815 17.4546 52.0076C16.0121 53.4918 12.7414 56.3893 9.09311 58.2907C8.94805 58.3624 8.82403 58.4692 8.73285 58.6012C8.64166 58.7332 8.58633 58.8858 8.57211 59.0447C8.56123 59.18 8.58214 59.3159 8.63321 59.4419C8.68429 59.568 8.76416 59.6808 8.86667 59.7718C8.96918 59.8627 9.09158 59.9292 9.22442 59.9663C9.35727 60.0034 9.49701 60.01 9.63286 59.9855C12.4254 59.4355 15.1241 58.1855 17.6956 56.8499C17.8606 56.7645 18.044 56.7193 18.2304 56.7179C18.4168 56.7165 18.6009 56.7591 18.7671 56.842C22.2486 58.581 26.0991 59.4874 30.0048 59.4874C33.9104 59.4874 37.7609 58.581 41.2424 56.842C41.4106 56.7583 41.5967 56.7153 41.7852 56.7167C41.9737 56.7181 42.1591 56.7637 42.3259 56.8499C44.8841 58.1657 47.5788 59.4276 50.3619 59.9816C50.4935 60.0064 50.629 60.0022 50.7586 59.9691C50.8882 59.9361 51.0088 59.875 51.1114 59.7905C51.214 59.7059 51.2961 59.5999 51.3518 59.4803C51.4075 59.3606 51.4354 59.2302 51.4334 59.0987L51.4307 59.1ZM59.5618 29.3316C59.0944 28.2276 58.1019 27.3723 56.7626 26.917L53.5736 25.6696V14.7375C53.5736 12.504 52.6706 10.362 51.063 8.78265C49.4555 7.20332 47.2753 6.31607 45.0019 6.31607H40.7161V5.26339C40.7161 3.86745 40.1516 2.52869 39.1469 1.54161C38.1422 0.554534 36.7796 0 35.3587 0H24.6441C23.2232 0 21.8606 0.554534 20.8559 1.54161C19.8512 2.52869 19.2868 3.86745 19.2868 5.26339V6.31607H15.0009C12.7275 6.31607 10.5473 7.20332 8.93977 8.78265C7.33226 10.362 6.42918 12.504 6.42918 14.7375V25.6788L3.27103 26.9143C1.93974 27.3486 0.909791 28.2302 0.438347 29.3408C0.11021 30.1158 -0.264802 31.3145 0.264234 32.8225L0.277627 32.862L6.52695 48.5785C6.75718 49.1559 7.16 49.6512 7.68238 49.9993C8.20476 50.3474 8.8222 50.5319 9.45339 50.5285C9.52035 50.5285 9.58732 50.5285 9.6583 50.522C13.8531 50.2588 17.1586 48.2495 19.3818 46.3626C22.5574 49.0561 26.2928 50.5285 30.0014 50.5285C33.71 50.5285 37.4253 49.0548 40.6009 46.3573C42.8228 48.2469 46.1323 50.2614 50.3258 50.522C50.9896 50.5678 51.6511 50.4044 52.2139 50.0556C52.7768 49.7068 53.2118 49.1907 53.4558 48.5824L59.7038 32.9238C60.1431 31.8593 60.0922 30.5869 59.5618 29.3316ZM31.7425 17.1337L31.5899 17.081C30.5554 16.7612 29.446 16.7612 28.4116 17.081L28.3339 17.1047L11.449 23.7142C11.3677 23.746 11.2797 23.7578 11.1927 23.7485C11.1056 23.7391 11.0223 23.709 10.9499 23.6607C10.8775 23.6124 10.8182 23.5474 10.7773 23.4714C10.7363 23.3954 10.715 23.3107 10.715 23.2247V14.7375C10.715 13.6207 11.1666 12.5497 11.9703 11.7601C12.7741 10.9704 13.8642 10.5268 15.0009 10.5268H45.0019C46.1386 10.5268 47.2287 10.9704 48.0325 11.7601C48.8362 12.5497 49.2878 13.6207 49.2878 14.7375V23.2168C49.2879 23.3028 49.2665 23.3875 49.2256 23.4635C49.1846 23.5395 49.1254 23.6045 49.0529 23.6528C48.9805 23.7011 48.8972 23.7312 48.8102 23.7406C48.7231 23.7499 48.6351 23.7381 48.5538 23.7063L31.7425 17.1337Z"
                fill="currentColor" />
            </svg>
            <span class="text-[24px] mob:text-[20px] md:text-[30px] font-bold leading-10">الاستيراد التجاري</span>
          </button>
        </div>
    
        <!-- Tab Content -->
        <div class="bg-white rounded-xl border border-[#3773C9] py-10">
          <div id="tab-personal"
            class="tab-content flex flex-col gap-8 mob:gap-12 px-8 mob:px-3 bg-[url('<?php echo home_url(); ?>/wp-content/uploads/2025/04/vector.png')] bg-no-repeat bg-left-center mob:bg-none"
            style="background-position: left center; background-size: 39%">
            <h2 class="md:text-[30px] text-[24px] mob:text-[18px] font-bold md:w-[72%] w-full text-[#19345A]">
              نوفر للأفراد إمكانية استيراد المنتجات التي يحتاجونها بسهولة، من أي
              بلد في العالم، مع خطوات مبسطة تشمل
            </h2>
            <div class="flex flex-col gap-9 mob:gap-[22px]">
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  التواصل المباشر نيابة عنك مع المصانع المختلفة لتوفير المنتج
                  الأعلي جودة والأنسب سعر.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  لدينا شراكات قوية مع كبرى شركات الشحن الدولي وشركات والتخليص
                  الجمركي.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  توفير أقل سعر شحن دولي سواء بحري أو جوي في مدة زمنية قليلة.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  نوفر لك خدمات النقل الداخلي داخل المملكة، مع التوصيل حتى باب
                  منزلك بكل سهولة وأمان.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
    
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  نقدم لك دعمًا شاملاً في إجراءات التخليص الجمركي بالتعاون مع
                  شركائنا، ونتولى جميع الخطوات اللازمة لإصدار شهادات الإعفاء عبر
                  منصة سابر للاستيراد الشخصي، بالإضافة إلى فتح حساب شخصي لك على
                  المنصة لضمان تجربة استيراد سلسة وموثوقة.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  نقوم بإدارة عملية الاستيراد بالكامل، بدءًا من التصنيع وحتى
                  توصيل المنتج إلى العميل، مع ضمان أقل تكلفة وأعلى كفاءة.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M39.9664 16.2603L33.7893 10.0791C29.5664 5.84992 27.456 3.7395 25.1872 4.2395C22.9185 4.7395 21.8935 7.54575 19.8372 13.1562L18.4456 16.9541C17.8977 18.4499 17.6227 19.1978 17.1289 19.777C16.9082 20.0374 16.6563 20.2697 16.3789 20.4687C15.7622 20.9124 14.9956 21.1228 13.4622 21.5458C10.0039 22.4999 8.27266 22.977 7.62058 24.1082C7.33869 24.5979 7.19201 25.1537 7.19558 25.7187C7.20391 27.0249 8.47266 28.2937 11.0081 30.8333L13.9581 33.7832L4.63308 43.1166C4.34892 43.4178 4.19335 43.8179 4.19939 44.232C4.20542 44.646 4.37259 45.0414 4.66541 45.3343C4.95822 45.6271 5.35363 45.7942 5.76768 45.8003C6.18174 45.8063 6.58185 45.6507 6.88308 45.3666L16.206 36.0332L19.2602 39.0916C21.8143 41.6457 23.0914 42.9249 24.406 42.9249C24.9581 42.9249 25.5018 42.7832 25.9831 42.5082C27.1247 41.8562 27.6039 40.1145 28.5643 36.6291C28.9852 35.0978 29.1956 34.3333 29.6372 33.7145C29.8317 33.4451 30.0553 33.2006 30.3081 32.9812C30.881 32.4853 31.6247 32.2062 33.1102 31.6478L36.9518 30.2041C42.5018 28.1208 45.2768 27.077 45.7643 24.8166C46.2539 22.5541 44.1602 20.4562 39.9664 16.2603Z"
                    fill="#3773C9" />
                </svg>
    
                <p class="md:text-[24px] text-[18px] font-bold text-[#214579] w-[75%] mob:w-full">
                  إذا كنت فردًا تبحث عن أفضل الحلول للاستيراد الشخصي، فإننا في
                  مؤهل ندير لك عملية الاستيراد الشخصي بالكامل، من البداية حتى
                  التوصيل، بكل سهولة وأمان.
                </p>
              </div>
            </div>
            <div class="flex mob:justify-center mob:items-center">
              <button
                class="px-4 py-[14px] justify-center items-center gap-2 rounded-lg bg-[#3773C9] text-white text-lg font-bold hover:bg-[#00796B] transition-all duration-700 ease-in-out personal-import-btn">
                ابدأ طلبك للاستيراد الشخصى
              </button>
            </div>
          </div>
          <div id="tab-trade"
            class="tab-content hidden flex flex-col gap-8 mob:gap-12 px-8 mob:px-3 bg-[url('<?php echo home_url(); ?>/wp-content/uploads/2025/04/vector3.png')] bg-no-repeat bg-left-center mob:bg-none"
            style="background-position: left center; background-size: 39%">
            <h2 class="md:text-[30px] text-[24px] mob:text-[18px] font-bold md:w-[80%] w-full text-[#19345A]">
              إذا كنت مصنعًا أو منشأة صناعية وتخطط لبدء الاستيراد الصناعي، فنحن
              نقدم لك الدعم الكامل للحصول على الإعفاءات الجمركية والمزايا
              المخصصة للمصانع. كما نوفر حلولًا متخصصة لاستيراد المعدات وخطوط
              الإنتاج بكل سهولة وكفاءة.
            </h2>
            <div class="flex flex-col gap-9 mob:gap-[22px]">
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  نحدد متطلباتك بدقة ونوفر لك أفضل خطوط الإنتاج والمعدات
                  المتطورة التي تناسب احتياجات مصنعك، لضمان أعلى كفاءة وجودة
                  في عمليات الإنتاج.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  نقوم بالبحث عن أفضل المصانع العالمية لتوريد المعدات الصناعية
                  وخطوط الإنتاج، لضمان حصولك على أعلى جودة بأفضل الأسعار.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  ضمان جودة خطوط الإنتاج من خلال الفحص الميداني ومتابعة مراحل
                  التصنيع.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  تقديم خدمات التشغيل الأولي، بما في ذلك تدريب العاملين على
                  استخدام المعدات.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
    
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  توفير المواد الخام اللازمة للمصانع بشكل دوري لضمان استمرارية
                  الإنتاج.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  أنهاء إجراءات التخليص الجمركي بأسرع وقت.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  نساعدك في استخراج شهادات المواصفات والمقاييس والتراخيص،
                  بالإضافة إلى تسهيل حصول المصانع على إعفاءات سابر لماكينات
                  التصنيع، خطوط الإنتاج، والمواد الخام، لدعم التصنيع المحلي.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  نوفر لك حلولًا متكاملة  تشمل النقل الداخلى لتسهيل وصول خطوات
                  الإنتاج إلى مستودعاتك بكل سلاسة.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  تقديم دعم مستمر مع المصانع مع توفير ضمان لخطوط الانتاج
                  والمعدات كاملة داخل المملكة , فمن خلال فهمنا الجيد لآليات
                  الاستيراد الصناعى فنحن نضمن لك عملية استيراد ناجحة وبأقل
                  التكاليف مما يضمن لك المنافسة في السوق المحلي يضمن لنا رضاء
                  عملائنا
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M39.9664 16.2603L33.7893 10.0791C29.5664 5.84992 27.456 3.7395 25.1872 4.2395C22.9185 4.7395 21.8935 7.54575 19.8372 13.1562L18.4456 16.9541C17.8977 18.4499 17.6227 19.1978 17.1289 19.777C16.9082 20.0374 16.6563 20.2697 16.3789 20.4687C15.7622 20.9124 14.9956 21.1228 13.4622 21.5458C10.0039 22.4999 8.27266 22.977 7.62058 24.1082C7.33869 24.5979 7.19201 25.1537 7.19558 25.7187C7.20391 27.0249 8.47266 28.2937 11.0081 30.8333L13.9581 33.7832L4.63308 43.1166C4.34892 43.4178 4.19335 43.8179 4.19939 44.232C4.20542 44.646 4.37259 45.0414 4.66541 45.3343C4.95822 45.6271 5.35363 45.7942 5.76768 45.8003C6.18174 45.8063 6.58185 45.6507 6.88308 45.3666L16.206 36.0332L19.2602 39.0916C21.8143 41.6457 23.0914 42.9249 24.406 42.9249C24.9581 42.9249 25.5018 42.7832 25.9831 42.5082C27.1247 41.8562 27.6039 40.1145 28.5643 36.6291C28.9852 35.0978 29.1956 34.3333 29.6372 33.7145C29.8317 33.4451 30.0553 33.2006 30.3081 32.9812C30.881 32.4853 31.6247 32.2062 33.1102 31.6478L36.9518 30.2041C42.5018 28.1208 45.2768 27.077 45.7643 24.8166C46.2539 22.5541 44.1602 20.4562 39.9664 16.2603Z"
                    fill="#3773C9" />
                </svg>
    
                <p class="md:text-[24px] text-[18px] font-bold text-[#214579] w-[75%] mob:w-full leading-relaxed">
                  لماذا لا يكون منتجك <span class="">"صُنع في السعودية"؟</span>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Flag_of_Saudi_Arabia.svg" alt="Saudi Flag"
                    class="w-6 h-6 inline-block align-middle" />
                  نحن نساعدك في استيراد أحدث خطوط الإنتاج والمعدات بأفضل
                  الأسعار، مع ضمان استيراد ناجح ودعم مستمر للمصانع. ابدأ الآن
                  وساهم في تعزيز التصنيع المحلي وزيادة تنافسيتك في السوق!
                </p>
              </div>
            </div>
            <div class="flex mob:justify-center mob:items-center">
              <button
                class="px-4 py-[14px] justify-center items-center gap-2 rounded-lg bg-[#3773C9] text-white text-lg font-bold hover:bg-[#00796B] transition-all duration-700 ease-in-out industrial-import-btn">
                ابدأ طلبك للاستيراد الصناعى
              </button>
            </div>
          </div>
          <div id="tab-industrial"
            class="tab-content hidden flex flex-col gap-8 mob:gap-12 px-8 mob:px-3 bg-[url('<?php echo home_url(); ?>/wp-content/uploads/2025/04/vector2.png')] bg-no-repeat bg-left-center mob:bg-none"
            style="background-position: left center; background-size: 39%">
            <h2 class="md:text-[30px] text-[24px] mob:text-[18px] font-bold md:w-[72%] w-full text-[#19345A]">
              للشركات والتجار الذين يسعون لاستيراد المنتجات بكميات تجارية، نقدم
              خدمات متكاملة تشمل
            </h2>
            <div class="flex flex-col gap-9 mob:gap-[22px]">
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  تحديد متطلبات العميل بدقة من حيث الكمية والمواصفات المطلوبة
                  والبحث عن أفضل المصانع والموردين لتوفير أعلى جودة.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  التواصل مع المصانع مباشرة للحصول على أسعار منصعيه تنافسية مع
                  توفير عينات للمنتجات المطلوبة
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  ضمان الجودة من خلال عقود صارمة مع المصانع ومتابعة مراحل
                  الإنتاج.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  تقديم تقارير شاملة عن حالة التصنيع من خلال زيارة موظفينا
                  للمصانع في الصين.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
    
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  إمكانية تخصيص العلامة التجارية الخاصة بشركتك (اللوغو والتعبئة)
                  وفقًا لمتطلبات العميل.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  ترتيب الشحن الدولى والحصول على أقل الأسعار للحاويات لضمان أقل
                  التكاليف لعملية استيراد ناجحة.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  نتولى إنهاء إجراءات التخليص الجمركي بالكامل عبر فسح، من إنشاء
                  الحساب إلى تصديق الخطابات والتفويض، لضمان تخليص سريع وكفاءة
                  عالية.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  لا يمكن الاستيراد التجاري بدون شهادات المواصفات السعودية سواء
                  كانت المنتجات خاضعة او غير خاضعة نحن نوفر خدمة إدراج المنتجات
                  وإصدار الشهادات عبر منصتي سابر وهيئة الغذاء والدواء.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                    stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                  توفير حلول لوجستية متكاملة تشمل النقل الداخلي إلى مستودعات
                  العميل.
                </p>
              </div>
    
              <div class="flex flex-row gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]"
                  viewBox="0 0 50 50" fill="none">
                  <path
                    d="M39.9664 16.2603L33.7893 10.0791C29.5664 5.84992 27.456 3.7395 25.1872 4.2395C22.9185 4.7395 21.8935 7.54575 19.8372 13.1562L18.4456 16.9541C17.8977 18.4499 17.6227 19.1978 17.1289 19.777C16.9082 20.0374 16.6563 20.2697 16.3789 20.4687C15.7622 20.9124 14.9956 21.1228 13.4622 21.5458C10.0039 22.4999 8.27266 22.977 7.62058 24.1082C7.33869 24.5979 7.19201 25.1537 7.19558 25.7187C7.20391 27.0249 8.47266 28.2937 11.0081 30.8333L13.9581 33.7832L4.63308 43.1166C4.34892 43.4178 4.19335 43.8179 4.19939 44.232C4.20542 44.646 4.37259 45.0414 4.66541 45.3343C4.95822 45.6271 5.35363 45.7942 5.76768 45.8003C6.18174 45.8063 6.58185 45.6507 6.88308 45.3666L16.206 36.0332L19.2602 39.0916C21.8143 41.6457 23.0914 42.9249 24.406 42.9249C24.9581 42.9249 25.5018 42.7832 25.9831 42.5082C27.1247 41.8562 27.6039 40.1145 28.5643 36.6291C28.9852 35.0978 29.1956 34.3333 29.6372 33.7145C29.8317 33.4451 30.0553 33.2006 30.3081 32.9812C30.881 32.4853 31.6247 32.2062 33.1102 31.6478L36.9518 30.2041C42.5018 28.1208 45.2768 27.077 45.7643 24.8166C46.2539 22.5541 44.1602 20.4562 39.9664 16.2603Z"
                    fill="#3773C9" />
                </svg>
    
                <p class="md:text-[24px] text-[18px] font-bold text-[#214579] w-[75%] mob:w-full leading-relaxed">
                  فمن خلال فهمنا الجيد لآليات الاستيراد التجاري فنحن نضمن لك
                  عملية استيراد ناجحة وبأقل التكاليف مما يضمن لك المنافسة في
                  السوق المحلي ويضمن لنا رضائك.
                </p>
              </div>
            </div>
            <div class="flex mob:justify-center mob:items-center">
              <button
                class="px-4 py-[14px] justify-center items-center gap-2 rounded-lg bg-[#3773C9] text-white text-lg font-bold hover:bg-[#00796B] transition-all duration-700 ease-in-out trade-import-btn">
                ابدأ طلبك للاستيراد التجارى
              </button>
            </div>
          </div>
        </div>
      </div>

<!-- Mobile view -->
        <!-- Accordion -->
        <div class="w-full md:w-3/4 space-y-6 mob:block hidden">
          <!-- Accordion Item -->
          <div class="import-accordion">
            <button
              class="w-full text-center flex justify-center items-center flex-col gap-[22px] tab-btn px-8 py-3 rounded-xl border border-[#3773C9] bg-[#EBF1FA] text-[#3268B5] shadow-sm transition active-tab import-accordion-header">
           
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M17.5 2.3479L30.625 9.9256V25.0811L17.5 32.6588L4.375 25.0811V9.9256L17.5 2.3479ZM13.1249 16.4927L13.125 26.7651L16.0417 28.4491V18.1766L13.1249 16.4927ZM7.29169 13.125V23.3971L10.2083 25.0812V14.8089L7.29169 13.125ZM23.2416 9.03064L14.6571 14.0097L17.5 15.651L26.1042 10.6834L23.2416 9.03064ZM17.5 5.71576L8.89581 10.6834L11.7438 12.3276L20.3283 7.34866L17.5 5.71576Z"
              fill="currentColor" />
          </svg>
<span class="text-xl font-bold">الاستيراد الشخصى</span>
           
            </button>
            <div
              class="import-accordion-body flex flex-col gap-7 h-full  px-3  open transition-all duration-500 ease-in-out overflow-hidden bg-white rounded-xl border border-[#3773C9] mt-2"
              >
                <h2 class="md:text-[30px] text-[24px] mob:text-[18px] font-bold text-[#19345A] pt-8 ">
                  نوفر للأفراد إمكانية استيراد المنتجات التي يحتاجونها بسهولة، من أي بلد في العالم، مع خطوات مبسطة تشمل
                </h2>
                <div class="flex flex-col gap-5 mob:gap-[22px]">
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      التواصل المباشر نيابة عنك مع المصانع المختلفة لتوفير المنتج
                      الأعلي جودة والأنسب سعر.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      لدينا شراكات قوية مع كبرى شركات الشحن الدولي وشركات والتخليص
                      الجمركي.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      توفير أقل سعر شحن دولي سواء بحري أو جوي في مدة زمنية قليلة.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      نوفر لك خدمات النقل الداخلي داخل المملكة، مع التوصيل حتى باب
                      منزلك بكل سهولة وأمان.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      نقدم لك دعمًا شاملاً في إجراءات التخليص الجمركي بالتعاون مع
                      شركائنا، ونتولى جميع الخطوات اللازمة لإصدار شهادات الإعفاء عبر
                      منصة سابر للاستيراد الشخصي، بالإضافة إلى فتح حساب شخصي لك على
                      المنصة لضمان تجربة استيراد سلسة وموثوقة.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      نقوم بإدارة عملية الاستيراد بالكامل، بدءًا من التصنيع وحتى
                      توصيل المنتج إلى العميل، مع ضمان أقل تكلفة وأعلى كفاءة.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M39.9664 16.2603L33.7893 10.0791C29.5664 5.84992 27.456 3.7395 25.1872 4.2395C22.9185 4.7395 21.8935 7.54575 19.8372 13.1562L18.4456 16.9541C17.8977 18.4499 17.6227 19.1978 17.1289 19.777C16.9082 20.0374 16.6563 20.2697 16.3789 20.4687C15.7622 20.9124 14.9956 21.1228 13.4622 21.5458C10.0039 22.4999 8.27266 22.977 7.62058 24.1082C7.33869 24.5979 7.19201 25.1537 7.19558 25.7187C7.20391 27.0249 8.47266 28.2937 11.0081 30.8333L13.9581 33.7832L4.63308 43.1166C4.34892 43.4178 4.19335 43.8179 4.19939 44.232C4.20542 44.646 4.37259 45.0414 4.66541 45.3343C4.95822 45.6271 5.35363 45.7942 5.76768 45.8003C6.18174 45.8063 6.58185 45.6507 6.88308 45.3666L16.206 36.0332L19.2602 39.0916C21.8143 41.6457 23.0914 42.9249 24.406 42.9249C24.9581 42.9249 25.5018 42.7832 25.9831 42.5082C27.1247 41.8562 27.6039 40.1145 28.5643 36.6291C28.9852 35.0978 29.1956 34.3333 29.6372 33.7145C29.8317 33.4451 30.0553 33.2006 30.3081 32.9812C30.881 32.4853 31.6247 32.2062 33.1102 31.6478L36.9518 30.2041C42.5018 28.1208 45.2768 27.077 45.7643 24.8166C46.2539 22.5541 44.1602 20.4562 39.9664 16.2603Z"
                        fill="#3773C9" />
                    </svg>
                
                    <p class="md:text-[24px] text-[18px] font-bold text-[#214579] w-[75%] mob:w-full">
                      إذا كنت فردًا تبحث عن أفضل الحلول للاستيراد الشخصي، فإننا في
                      مؤهل ندير لك عملية الاستيراد الشخصي بالكامل، من البداية حتى
                      التوصيل، بكل سهولة وأمان.
                    </p>
                  </div>
                </div>
                <div class="pb-8 flex mob:justify-center mob:items-center">
                  <button
                    class="px-4 py-[14px] justify-center items-center gap-2 rounded-lg bg-[#3773C9] text-white text-lg font-bold hover:bg-[#00796B] transition-all duration-700 ease-in-out personal-import-btn">
                    ابدأ طلبك للاستيراد الشخصى
                  </button>
                </div>
               
            </div>
          </div>
        
          <!-- Accordion Item -->
          <div class="import-accordion">
            <button
              class="w-full text-center flex justify-center items-center flex-col gap-[22px] tab-btn px-8 py-3 rounded-xl border border-[#3773C9] bg-[#EBF1FA] text-[#3268B5] shadow-sm transition import-accordion-header">
          
<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
  <path
    d="M33.3047 6.84705L21.875 15.0444V8.12564C21.8757 7.89951 21.8177 7.67781 21.7076 7.48629C21.5976 7.29476 21.4401 7.14128 21.2534 7.04367C21.0667 6.94607 20.8585 6.90834 20.6529 6.93487C20.4474 6.96141 20.2529 7.05112 20.0922 7.19358L13.2016 13.491H8.75V1.61318L2.1875 0V13.491H0V33.8051C0 34.122 0.115234 34.4259 0.320352 34.65C0.52547 34.8741 0.803669 35 1.09375 35H33.9062C34.1963 35 34.4745 34.8741 34.6796 34.65C34.8848 34.4259 35 34.122 35 33.8051V7.83885C34.999 7.62366 34.9448 7.41277 34.8432 7.22843C34.7415 7.0441 34.5962 6.89317 34.4226 6.79159C34.2489 6.69001 34.0534 6.64154 33.8567 6.6513C33.6599 6.66106 33.4692 6.72869 33.3047 6.84705ZM13.125 31.4152H4.375V29.0253H13.125V31.4152ZM13.125 26.6354H4.375V24.2455H13.125V26.6354ZM13.125 21.8556H4.375V19.4657H13.125V21.8556ZM21.875 31.4152H19.6875V27.8303H21.875V31.4152ZM21.875 24.2455H19.6875V20.6606H21.875V24.2455ZM26.25 31.4152H24.0625V27.8303H26.25V31.4152ZM26.25 24.2455H24.0625V20.6606H26.25V24.2455ZM30.625 31.4152H28.4375V27.8303H30.625V31.4152ZM30.625 24.2455H28.4375V20.6606H30.625V24.2455Z"
    fill="currentColor" />
</svg>

              <span class="text-xl font-bold">الاستيراد الصناعى</span>
            </button>
            <div
              class="import-accordion-body flex flex-col gap-7 h-full  px-3   transition-all duration-500 ease-in-out overflow-hidden bg-white rounded-xl border border-[#3773C9] mt-2"
              style="max-height: 0;">
                <h2 class="md:text-[30px] text-[24px] mob:text-[18px] font-bold md:w-[80%] w-full text-[#19345A] pt-8">
                  إذا كنت مصنعًا أو منشأة صناعية وتخطط لبدء الاستيراد الصناعي، فنحن
                  نقدم لك الدعم الكامل للحصول على الإعفاءات الجمركية والمزايا
                  المخصصة للمصانع. كما نوفر حلولًا متخصصة لاستيراد المعدات وخطوط
                  الإنتاج بكل سهولة وكفاءة.
                </h2>
                <div class="flex flex-col gap-5 ">
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      نحدد متطلباتك بدقة ونوفر لك أفضل خطوط الإنتاج والمعدات
                      المتطورة التي تناسب احتياجات مصنعك، لضمان أعلى كفاءة وجودة
                      في عمليات الإنتاج.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      نقوم بالبحث عن أفضل المصانع العالمية لتوريد المعدات الصناعية
                      وخطوط الإنتاج، لضمان حصولك على أعلى جودة بأفضل الأسعار.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      ضمان جودة خطوط الإنتاج من خلال الفحص الميداني ومتابعة مراحل
                      التصنيع.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      تقديم خدمات التشغيل الأولي، بما في ذلك تدريب العاملين على
                      استخدام المعدات.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      توفير المواد الخام اللازمة للمصانع بشكل دوري لضمان استمرارية
                      الإنتاج.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      أنهاء إجراءات التخليص الجمركي بأسرع وقت.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      نساعدك في استخراج شهادات المواصفات والمقاييس والتراخيص،
                      بالإضافة إلى تسهيل حصول المصانع على إعفاءات سابر لماكينات
                      التصنيع، خطوط الإنتاج، والمواد الخام، لدعم التصنيع المحلي.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      نوفر لك حلولًا متكاملة  تشمل النقل الداخلى لتسهيل وصول خطوات
                      الإنتاج إلى مستودعاتك بكل سلاسة.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      تقديم دعم مستمر مع المصانع مع توفير ضمان لخطوط الانتاج
                      والمعدات كاملة داخل المملكة , فمن خلال فهمنا الجيد لآليات
                      الاستيراد الصناعى فنحن نضمن لك عملية استيراد ناجحة وبأقل
                      التكاليف مما يضمن لك المنافسة في السوق المحلي يضمن لنا رضاء
                      عملائنا
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M39.9664 16.2603L33.7893 10.0791C29.5664 5.84992 27.456 3.7395 25.1872 4.2395C22.9185 4.7395 21.8935 7.54575 19.8372 13.1562L18.4456 16.9541C17.8977 18.4499 17.6227 19.1978 17.1289 19.777C16.9082 20.0374 16.6563 20.2697 16.3789 20.4687C15.7622 20.9124 14.9956 21.1228 13.4622 21.5458C10.0039 22.4999 8.27266 22.977 7.62058 24.1082C7.33869 24.5979 7.19201 25.1537 7.19558 25.7187C7.20391 27.0249 8.47266 28.2937 11.0081 30.8333L13.9581 33.7832L4.63308 43.1166C4.34892 43.4178 4.19335 43.8179 4.19939 44.232C4.20542 44.646 4.37259 45.0414 4.66541 45.3343C4.95822 45.6271 5.35363 45.7942 5.76768 45.8003C6.18174 45.8063 6.58185 45.6507 6.88308 45.3666L16.206 36.0332L19.2602 39.0916C21.8143 41.6457 23.0914 42.9249 24.406 42.9249C24.9581 42.9249 25.5018 42.7832 25.9831 42.5082C27.1247 41.8562 27.6039 40.1145 28.5643 36.6291C28.9852 35.0978 29.1956 34.3333 29.6372 33.7145C29.8317 33.4451 30.0553 33.2006 30.3081 32.9812C30.881 32.4853 31.6247 32.2062 33.1102 31.6478L36.9518 30.2041C42.5018 28.1208 45.2768 27.077 45.7643 24.8166C46.2539 22.5541 44.1602 20.4562 39.9664 16.2603Z"
                        fill="#3773C9" />
                    </svg>
                
                    <p class="md:text-[24px] text-[18px] font-bold text-[#214579] w-[75%] mob:w-full leading-relaxed">
                      لماذا لا يكون منتجك <span class="">"صُنع في السعودية"؟</span>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Flag_of_Saudi_Arabia.svg" alt="Saudi Flag"
                        class="w-6 h-6 inline-block align-middle" />
                      نحن نساعدك في استيراد أحدث خطوط الإنتاج والمعدات بأفضل
                      الأسعار، مع ضمان استيراد ناجح ودعم مستمر للمصانع. ابدأ الآن
                      وساهم في تعزيز التصنيع المحلي وزيادة تنافسيتك في السوق!
                    </p>
                  </div>
                </div>
                <div class="flex mob:justify-center mob:items-center pb-8">
                  <button
                    class="px-4 py-[14px] justify-center items-center gap-2 rounded-lg bg-[#3773C9] text-white text-lg font-bold hover:bg-[#00796B] transition-all duration-700 ease-in-out industrial-import-btn">
                    ابدأ طلبك للاستيراد الصناعى
                  </button>
                </div>
            
            </div>
          </div>
        
          <!-- Accordion Item -->
          <div class="import-accordion">
            <button
              class="w-full text-center flex justify-center items-center flex-col gap-[22px] tab-btn px-8 py-3 rounded-xl border border-[#3773C9] bg-[#EBF1FA] text-[#3268B5] shadow-sm transition import-accordion-header">
           
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                <path
                  d="M30.0012 34.475C30.0012 34.3807 29.9753 34.2881 29.9262 34.2071C29.8771 34.126 29.8067 34.0595 29.7223 34.0144C27.6074 32.8976 25.6784 31.1882 24.83 30.3301C24.7039 30.2002 24.5357 30.1176 24.3543 30.0964C24.1729 30.0753 23.9897 30.1169 23.8362 30.2142C19.904 32.7027 15.1164 32.7042 11.1834 30.218C11.0286 30.1198 10.8436 30.0779 10.6606 30.0998C10.4776 30.1217 10.3082 30.2059 10.1818 30.3377C9.34039 31.2036 7.43251 32.8938 5.30431 34.0029C5.21969 34.0447 5.14735 34.107 5.09416 34.184C5.04097 34.261 5.00869 34.3501 5.0004 34.4428C4.99405 34.5217 5.00625 34.6009 5.03604 34.6745C5.06583 34.748 5.11243 34.8138 5.17222 34.8669C5.23202 34.9199 5.30342 34.9587 5.38091 34.9803C5.45841 35.002 5.53992 35.0058 5.61917 34.9916C7.24813 34.6707 8.8224 33.9415 10.3225 33.1624C10.4187 33.1127 10.5256 33.0863 10.6344 33.0855C10.7431 33.0847 10.8505 33.1095 10.9475 33.1578C12.9784 34.1722 15.2245 34.701 17.5028 34.701C19.7811 34.701 22.0272 34.1722 24.0581 33.1578C24.1562 33.109 24.2647 33.0839 24.3747 33.0847C24.4846 33.0855 24.5928 33.1122 24.6901 33.1624C26.1824 33.93 27.7543 34.6661 29.3778 34.9893C29.4545 35.0038 29.5336 35.0013 29.6092 34.982C29.6848 34.9627 29.7551 34.9271 29.815 34.8778C29.8748 34.8284 29.9227 34.7666 29.9552 34.6968C29.9877 34.627 30.004 34.551 30.0028 34.4742L30.0012 34.475ZM34.7444 17.1101C34.4717 16.4661 33.8928 15.9672 33.1115 15.7016L31.2513 14.9739V8.59687C31.2513 7.294 30.7245 6.04448 29.7868 5.12321C28.8491 4.20194 27.5772 3.68437 26.2511 3.68437H23.751V3.07031C23.751 2.25601 23.4218 1.47507 22.8357 0.899273C22.2496 0.323478 21.4548 0 20.6259 0H14.3757C13.5469 0 12.752 0.323478 12.1659 0.899273C11.5799 1.47507 11.2506 2.25601 11.2506 3.07031V3.68437H8.75052C7.4244 3.68437 6.15258 4.20194 5.21487 5.12321C4.27715 6.04448 3.75035 7.294 3.75035 8.59687V14.9793L1.9081 15.7C1.13151 15.9533 0.530712 16.4676 0.255702 17.1154C0.0642893 17.5676 -0.154468 18.2668 0.154136 19.1465L0.161949 19.1695L3.80739 28.3374C3.94169 28.6743 4.17667 28.9632 4.48139 29.1663C4.78611 29.3693 5.14628 29.477 5.51448 29.475C5.55354 29.475 5.5926 29.475 5.63401 29.4712C8.08097 29.3176 10.0092 28.1455 11.3061 27.0448C13.1585 28.6161 15.3375 29.475 17.5008 29.475C19.6642 29.475 21.8314 28.6153 23.6838 27.0418C24.98 28.144 26.9105 29.3192 29.3567 29.4712C29.7439 29.4979 30.1298 29.4026 30.4581 29.1991C30.7865 28.9956 31.0402 28.6946 31.1825 28.3397L34.8272 19.2056C35.0835 18.5846 35.0538 17.8423 34.7444 17.1101ZM18.5165 9.99463L18.4274 9.96393C17.824 9.77739 17.1769 9.77739 16.5734 9.96393L16.5281 9.97774L6.67858 13.8333C6.63115 13.8518 6.57981 13.8587 6.52905 13.8533C6.4783 13.8478 6.42967 13.8302 6.38743 13.8021C6.34518 13.7739 6.31061 13.736 6.28673 13.6917C6.26285 13.6473 6.25039 13.5979 6.25044 13.5477V8.59687C6.25044 7.94543 6.51384 7.32068 6.9827 6.86004C7.45155 6.39941 8.08746 6.14062 8.75052 6.14062H26.2511C26.9142 6.14062 27.5501 6.39941 28.0189 6.86004C28.4878 7.32068 28.7512 7.94543 28.7512 8.59687V13.5431C28.7513 13.5933 28.7388 13.6427 28.7149 13.687C28.691 13.7314 28.6565 13.7693 28.6142 13.7975C28.572 13.8256 28.5233 13.8432 28.4726 13.8487C28.4218 13.8541 28.3705 13.8472 28.3231 13.8287L18.5165 9.99463Z"
                  fill="currentColor" />
              </svg>


              <span class="text-xl font-bold">الاستيراد التجاري
</span>
            </button>
            <div
              class="import-accordion-body flex flex-col gap-7 h-full  px-3   transition-all duration-500 ease-in-out overflow-hidden bg-white rounded-xl border border-[#3773C9] mt-2"
              style="max-height: 0;">
                <h2  class="md:text-[30px] text-[24px] mob:text-[18px] font-bold md:w-[80%] w-full text-[#19345A] pt-8">
                  للشركات والتجار الذين يسعون لاستيراد المنتجات بكميات تجارية، نقدم خدمات متكاملة تشمل
                </h2>
                <div class="flex flex-col gap-5 ">
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      تحديد متطلبات العميل بدقة من حيث الكمية والمواصفات المطلوبة
                      والبحث عن أفضل المصانع والموردين لتوفير أعلى جودة.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      التواصل مع المصانع مباشرة للحصول على أسعار منصعيه تنافسية مع
                      توفير عينات للمنتجات المطلوبة
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      ضمان الجودة من خلال عقود صارمة مع المصانع ومتابعة مراحل
                      الإنتاج.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      تقديم تقارير شاملة عن حالة التصنيع من خلال زيارة موظفينا
                      للمصانع في الصين.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      إمكانية تخصيص العلامة التجارية الخاصة بشركتك (اللوغو والتعبئة)
                      وفقًا لمتطلبات العميل.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      ترتيب الشحن الدولى والحصول على أقل الأسعار للحاويات لضمان أقل
                      التكاليف لعملية استيراد ناجحة.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      نتولى إنهاء إجراءات التخليص الجمركي بالكامل عبر فسح، من إنشاء
                      الحساب إلى تصديق الخطابات والتفويض، لضمان تخليص سريع وكفاءة
                      عالية.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      لا يمكن الاستيراد التجاري بدون شهادات المواصفات السعودية سواء
                      كانت المنتجات خاضعة او غير خاضعة نحن نوفر خدمة إدراج المنتجات
                      وإصدار الشهادات عبر منصتي سابر وهيئة الغذاء والدواء.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M14.5837 24.9999L15.8857 26.302M45.8337 14.5833L25.0003 35.4166L23.6982 34.1145M4.16699 24.9999L14.5837 35.4166L35.417 14.5833"
                        stroke="#407D28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="md:text-[24px] text-[18px] font-medium text-[#214579] w-[75%] mob:w-full">
                      توفير حلول لوجستية متكاملة تشمل النقل الداخلي إلى مستودعات
                      العميل.
                    </p>
                  </div>
                
                  <div class="flex flex-row gap-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] mob:w-[30px] mob:h-[30px]" viewBox="0 0 50 50"
                      fill="none">
                      <path
                        d="M39.9664 16.2603L33.7893 10.0791C29.5664 5.84992 27.456 3.7395 25.1872 4.2395C22.9185 4.7395 21.8935 7.54575 19.8372 13.1562L18.4456 16.9541C17.8977 18.4499 17.6227 19.1978 17.1289 19.777C16.9082 20.0374 16.6563 20.2697 16.3789 20.4687C15.7622 20.9124 14.9956 21.1228 13.4622 21.5458C10.0039 22.4999 8.27266 22.977 7.62058 24.1082C7.33869 24.5979 7.19201 25.1537 7.19558 25.7187C7.20391 27.0249 8.47266 28.2937 11.0081 30.8333L13.9581 33.7832L4.63308 43.1166C4.34892 43.4178 4.19335 43.8179 4.19939 44.232C4.20542 44.646 4.37259 45.0414 4.66541 45.3343C4.95822 45.6271 5.35363 45.7942 5.76768 45.8003C6.18174 45.8063 6.58185 45.6507 6.88308 45.3666L16.206 36.0332L19.2602 39.0916C21.8143 41.6457 23.0914 42.9249 24.406 42.9249C24.9581 42.9249 25.5018 42.7832 25.9831 42.5082C27.1247 41.8562 27.6039 40.1145 28.5643 36.6291C28.9852 35.0978 29.1956 34.3333 29.6372 33.7145C29.8317 33.4451 30.0553 33.2006 30.3081 32.9812C30.881 32.4853 31.6247 32.2062 33.1102 31.6478L36.9518 30.2041C42.5018 28.1208 45.2768 27.077 45.7643 24.8166C46.2539 22.5541 44.1602 20.4562 39.9664 16.2603Z"
                        fill="#3773C9" />
                    </svg>
                
                    <p class="md:text-[24px] text-[18px] font-bold text-[#214579] w-[75%] mob:w-full leading-relaxed">
                      فمن خلال فهمنا الجيد لآليات الاستيراد التجاري فنحن نضمن لك
                      عملية استيراد ناجحة وبأقل التكاليف مما يضمن لك المنافسة في
                      السوق المحلي ويضمن لنا رضائك.
                    </p>
                  </div>
                </div>
                <div class="flex mob:justify-center mob:items-center pb-8">
                  <button
                    class="px-4 py-[14px] justify-center items-center gap-2 rounded-lg bg-[#3773C9] text-white text-lg font-bold hover:bg-[#00796B] transition-all duration-700 ease-in-out trade-import-btn">
                    ابدأ طلبك للاستيراد التجارى
                  </button>
                </div>
            </div>
          </div>
        </div>
    </section>