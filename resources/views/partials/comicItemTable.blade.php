<div id="comic-tables">

    <div class="container">

        <div class="talent">
            <h2>Talent</h2>
            <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Art by:</th>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis qui voluptatum ea, doloribus maiores delectus cupiditate, incidunt architecto deleniti consequatur laudantium. Saepe ducimus assumenda maiores. Mollitia officia maiores odit corporis!</td>
                  </tr>
                  <tr>
                    <th scope="row">Written by:</th>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, dolor voluptatem eos voluptatum nostrum autem suscipit reprehenderit corporis. Voluptate vitae delectus eveniet earum nobis consectetur magnam reprehenderit, perspiciatis beatae minus!</td>
                  </tr>
                </tbody>
            </table>
        </div>

        <div class="specs">
            <h2>Specs</h2>
            <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Series:</th>
                    <td>{{$comics[0]['series']}}</td>
                  </tr>
                  <tr>
                    <th scope="row">U.S. Price:</th>
                    <td class="price">{{$comics[0]['price']}}</td>
                  </tr>
                  <tr>
                    <th scope="row">On Sale Date:</th>
                    <td class="date">{{$comics[0]['sale_date']}}</td>
                  </tr>
                </tbody>
              </table>
        </div>

    </div>

</div>