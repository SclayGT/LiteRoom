<?php
$TambahBuku = get_all_books();
$TambahBuku = get_all_book();


?>
<div class="trending__product">
            <div class="product__page__title">
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                      <h4>Romance</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="product__page__filter">
                      <p>Order by:</p>
                      <select wire:model.live="categories">
                        <option value="roman">Roman</option>
                        <option value="horor">Horor</option>
                        <option value="klasik">Klasik</option>
                        <option value="puisi">Puisi</option>
                        <option value="spiritual">Spritual</option>
                        <option value="fantasi">Fantasi</option>

                        </select>
                    </div>
                  </div>
                </div>
              </div>
              <?php
          $i=1;
          ?>
        <div class="row">
          @foreach($TambahBuku as $buku)
          <div class="col-lg-4 col-md-6 col-sm-6"> 
          <div class="product__item" wire:model.live="categories">
                    <div class="product__item__pic set-bg" data-setbg="{{Storage::url($buku->thumbnail)}}">
                      <div class="ep">{{($buku->chapter)}}</div>
                      <div>{{ $categories }}</div>
                      <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                      <div class="view"><i class="fa fa-eye"></i> {{($buku->view)}}</div>
                    </div>
                    <div class="product__item__text">
                      <ul>
                        <li>{{($buku->genre)}}</li>
                        <!-- <li>Movie</li> -->
                      </ul>
                      <h5><a href="{{ route('detail-buku', ['id' => $buku->id]) }}">{{($buku->title)}}</a></h5>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>