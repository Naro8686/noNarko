<div class="block-2">
    <h2>Новости</h2>
    <div class="block__item">
        <img src="{{asset('img/dummy-image-350x250.gif')}}" data-src="{{asset('img/items/Rectangle.png')}}"
             alt="">
        <div>
            <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
            <hr>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's Ipsum is simply dummy text of the </p>
            <a href="{{route('news')}}">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
        </div>
    </div>
    <h2>Популярное в блоге</h2>
    <div class="block__item">
        <img src="{{asset('img/dummy-image-350x250.gif')}}" data-src="{{asset('img/items/Rectangle.png')}}"
             alt="">
        <div>
            <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
            <hr>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's Ipsum is simply dummy text of the </p>
            <a href="{{route('blog')}}">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
        </div>
    </div>
    <h2>Мы в соц сетях</h2>
    <div class="social">
        @foreach($contacts->social as $key => $social)
            <a href="{{$social['link']}}" target="_blank">
                @switch($key)
                    @case('vk')
                    <svg class="vk" width="42" height="24" viewBox="0 0 42 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M34.2913 13.6433C33.6232 12.8105 33.8143 12.44 34.2913 11.6957C34.2999 11.6872 39.815 4.16538 40.3833 1.61449L40.3867 1.61279C40.6691 0.683183 40.3867 0 39.0213 0H34.503C33.3528 0 32.8225 0.586314 32.5384 1.24231C32.5384 1.24231 30.2379 6.67718 26.9836 10.2002C25.9332 11.2181 25.4477 11.5444 24.8743 11.5444C24.5919 11.5444 24.1528 11.2181 24.1528 10.2885V1.61279C24.1528 0.497941 23.8308 0 22.8786 0H15.7742C15.0527 0 14.6239 0.520035 14.6239 1.00438C14.6239 2.06144 16.2511 2.30447 16.4199 5.27852V11.7314C16.4199 13.1453 16.1599 13.4053 15.583 13.4053C14.0471 13.4053 10.3192 7.94837 8.11006 1.70286C7.66409 0.491144 7.22846 0.00169934 6.06963 0.00169934H1.54969C0.260004 0.00169934 0 0.588013 0 1.244C0 2.40304 1.53592 8.1659 7.14236 15.7795C10.8788 20.9764 16.1409 23.7924 20.9277 23.7924C23.805 23.7924 24.1563 23.167 24.1563 22.0913C24.1563 17.1255 23.8963 16.6564 25.3375 16.6564C26.0056 16.6564 27.1558 16.9827 29.8419 19.4894C32.912 22.4618 33.4165 23.7924 35.135 23.7924H39.6532C40.9412 23.7924 41.5938 23.167 41.2184 21.9332C40.3592 19.3382 34.553 14.0001 34.2913 13.6433Z"/>
                    </svg>
                    @break

                    @case('instagram')
                    <i class="bi bi-instagram"></i>
                    @break

                    @case('youtube')
                    <svg class="youtube" width="30" height="36" viewBox="0 0 30 36"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M29.4032 17.7512C29.0409 16.177 27.7533 15.0158 26.2035 14.843C22.5343 14.4331 18.8187 14.4311 15.1213 14.4331C11.4224 14.4311 7.70756 14.4331 4.03722 14.843C2.48819 15.0162 1.20133 16.1774 0.839397 17.7512C0.32357 19.9927 0.317383 22.4396 0.317383 24.7477C0.317383 27.0558 0.317383 29.5023 0.83321 31.7438C1.19514 33.3176 2.482 34.4788 4.03181 34.652C7.70137 35.0623 11.4162 35.0639 15.1147 35.0623C18.8137 35.0642 22.5277 35.0623 26.1985 34.652C27.7475 34.4788 29.0351 33.3176 29.3971 31.7438C29.9125 29.5023 29.9152 27.0558 29.9152 24.7477C29.9148 22.4392 29.9187 19.9927 29.4032 17.7512ZM8.75971 19.4885H6.61752V30.8715H4.62767V19.4885H2.52454V17.6239H8.75971V19.4885ZM14.1643 30.8719H12.3744V29.795C11.6633 30.6101 10.9881 31.0076 10.3304 31.0076C9.75386 31.0076 9.35712 30.7741 9.17809 30.2741C9.08065 29.9756 9.02033 29.5031 9.02033 28.8063V21.0008H10.8087V28.2684C10.8087 28.6876 10.8087 28.9052 10.825 28.964C10.8679 29.2417 11.0036 29.3824 11.2433 29.3824C11.6022 29.3824 11.9773 29.1059 12.374 28.5449V21.0008H14.1639L14.1643 30.8719ZM20.9594 27.9092C20.9594 28.8221 20.8979 29.4799 20.7784 29.8982C20.5394 30.6325 20.0611 31.0076 19.3496 31.0076C18.7132 31.0076 18.0991 30.6542 17.5009 29.9156V30.8723H15.7126V17.6239H17.5009V21.9505C18.0786 21.2394 18.6919 20.8798 19.3496 20.8798C20.0611 20.8798 20.5398 21.2545 20.7784 21.9934C20.8987 22.3905 20.9594 23.0432 20.9594 23.9778V27.9092ZM27.7096 26.2623H24.1324V28.012C24.1324 28.9257 24.4313 29.382 25.0462 29.382C25.4866 29.382 25.743 29.1427 25.845 28.6647C25.8617 28.5677 25.8853 28.1702 25.8853 27.4529H27.71V27.7139C27.71 28.2904 27.6879 28.6875 27.6717 28.8662C27.6118 29.2622 27.471 29.6214 27.2541 29.9377C26.7588 30.6546 26.0248 31.008 25.0906 31.008C24.1549 31.008 23.4426 30.6712 22.9256 29.9972C22.5463 29.5031 22.3514 28.7251 22.3514 27.676V24.2187C22.3514 23.1635 22.5243 22.3917 22.9044 21.8929C23.421 21.2173 24.1328 20.8809 25.0466 20.8809C25.944 20.8809 26.6555 21.2173 27.1567 21.8929C27.5313 22.3917 27.7104 23.1635 27.7104 24.2187V26.2623H27.7096Z"/>
                        <path
                            d="M25.0303 22.49C24.4325 22.49 24.1328 22.9467 24.1328 23.8592V24.7725H25.9212V23.8592C25.9208 22.9467 25.6219 22.49 25.0303 22.49Z"/>
                        <path
                            d="M18.3921 22.49C18.0974 22.49 17.7989 22.6292 17.5 22.925V28.9413C17.7985 29.2406 18.0974 29.3821 18.3921 29.3821C18.9079 29.3821 19.1701 28.9413 19.1701 28.05V23.8368C19.1701 22.9467 18.9079 22.49 18.3921 22.49Z"/>
                        <path
                            d="M19.3921 13.5229C20.0514 13.5229 20.7374 13.1223 21.457 12.2979V13.386H23.2647V3.41016H21.457V11.0347C21.0564 11.6008 20.6767 11.8807 20.3151 11.8807C20.0731 11.8807 19.9308 11.7376 19.8913 11.4573C19.8693 11.3981 19.8693 11.1781 19.8693 10.7547V3.41016H18.0674V11.2984C18.0674 12.0029 18.1277 12.4797 18.2275 12.7817C18.4092 13.2871 18.8102 13.5229 19.3921 13.5229Z"/>
                        <path
                            d="M6.80698 7.96478V13.3864H8.81151V7.96478L11.2228 0H9.19587L7.82819 5.25688L6.40522 0H4.2959C4.71854 1.24085 5.15819 2.48788 5.58083 3.72989C6.22387 5.59677 6.62524 7.00427 6.80698 7.96478Z"/>
                        <path
                            d="M13.9097 13.5231C14.8152 13.5231 15.519 13.1824 16.0182 12.5019C16.3975 12.0027 16.5793 11.2162 16.5793 10.1559V6.66266C16.5793 5.5962 16.3979 4.81666 16.0182 4.31282C15.519 3.63034 14.8156 3.28967 13.9097 3.28967C13.0087 3.28967 12.3053 3.63034 11.805 4.31282C11.421 4.81666 11.2393 5.5962 11.2393 6.66266V10.1559C11.2393 11.2162 11.421 12.0027 11.805 12.5019C12.3049 13.1824 13.0087 13.5231 13.9097 13.5231ZM13.047 6.30034C13.047 5.37734 13.3269 4.9172 13.9097 4.9172C14.4924 4.9172 14.7716 5.37696 14.7716 6.30034V10.4966C14.7716 11.4196 14.4924 11.8813 13.9097 11.8813C13.3269 11.8813 13.047 11.4196 13.047 10.4966V6.30034Z"/>
                    </svg>
                    @break
                @endswitch
            </a>
        @endforeach
    </div>
</div>