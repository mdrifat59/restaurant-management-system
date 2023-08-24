@extends('layouts.master')
<div class="py-5"></div>

<!-- ======= Specials Section ======= -->
<section id="specials" class="specials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Specials</h2>
        <p>Check Our Specials</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Set Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Mixed Seasonal Fruit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Korean chowmein</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Fruit Cake</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Thai Thik Soup</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Set Menu</h3>
                  <p class="fst-italic">A set menu is a multi-course menu for a fixed price, and includes very few — if any — choices by customers. </p>
                  <p>The selection of dishes is “set” in advance by the chef. Some courses may have 1–2 options, but many set menus have no options at all; customers order the set menu or nothing at all. Other terms for this are: prix fixe menu, tasting menu, set meal, and table d'hôte.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('assets/img/specials-1.png')}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Mixed Seasonal Fruits</h3>
                  <p class="fst-italic">Mixed Fruits is exactly what it appears to be – a mix of assorted fruits!</p>
                  <p>While a blend of sliced peaches, strawberries, pineapple, mangoes, dates, apricots and grapes is absolutely heavenly, you can opt for a different selection of fruits depending on the recipe requirement, individual taste and seasonal availability.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('assets/img/specials-2.png')}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Korean chowmein</h3>
                  <p class="fst-italic">Korean noodles are noodles or noodle dishes in Korean cuisine, and are collectively referred to as "guksu" in native Korean or "myeon" in hanja character.</p>
                  <p>Noodles in Korea can be made from sweet potato starch, wheat flour, buckwheat, corn flour, rice flour, and acorn flour to name a few. In general, a number of Korean noodle dishes offer a variation on the meats, broths, vegetables, and noodles used.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('assets/img/specials-3.png')}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Fruit Cake</h3>
                  <p class="fst-italic">Fruitcake is an ancient goody, with the oldest versions a sort of energy bar made by the Romans to sustain their soldiers in battle. </p>
                  <p>The Roman fruitcake was a mash of barley, honey, wine and dried fruit, often pomegranate seeds.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('assets/img/specials-4.png')}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Thai Thik Soup</h3>
                  <p class="fst-italic">Thai thick soup, also known as "Tom Kha," is a rich and creamy soup that originates from Thailand. It is traditionally made with coconut milk, galangal (a type of ginger), lemongrass, kaffir lime leaves, and other aromatic herbs and spices.</p>
                  <p>The soup often includes vegetables, such as mushrooms, and can be prepared with chicken, shrimp, or tofu as the main protein. The combination of flavors creates a harmonious blend of sweet, sour, and savory, making it a popular and comforting dish in Thai cuisine.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('assets\img\thai soup.jpg')}}" alt="" class="rounded img-fluid" width="200">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Specials Section -->