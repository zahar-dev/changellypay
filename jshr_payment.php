<script src="py.js"></script>
 <script src="jsrsasign.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 
<!--JSHP-->
<script>
   
    if (typeof pmlib !== 'undefined' ) {
       console.log('sfsfsdf');
       let key_public=`MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAq85Et/1Jn3zIfiJLzBQzLdoJxjmHPitKNVIZaVjX1hKFqQk5dMEIIA2+iYrv8PtiERyaVNQYxBN8G+x62MjNWwVbNQ0e9GmBqq8oH0AFwbD0Gh1MChlxqM8pxnYgOj3vOw8PZ1iuHe6PP2zftSVo36wXA5tsYKBuhxWOZdLqBtOYcKL+gAvoG7h1hKLOsa+lUQxCJ2rF5KVBnkUhrUpTn0PhvTc+nTg6A8edXIz84dTVZ5Hg6vYs5DCGsFEcV4ak7x6sTVaz9LuhIZjW4fAW+kblo74MYmA35azsdTU+z2vO9ebtZ/DNwBi7LivrhTYTP+lJBsp+4JuNmHJaA9AaGwIDAQAB`;
       let apiPrivateKey = `-----BEGIN PRIVATE KEY-----
MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCrzkS3/UmffMh+IkvMFDMt2gnGOYc+K0o1UhlpWNfWEoWpCTl0wQggDb6Jiu/w+2IRHJpU1BjEE3wb7HrYyM1bBVs1DR70aYGqrygfQAXBsPQaHUwKGXGozynGdiA6Pe87Dw9nWK4d7o8/bN+1JWjfrBcDm2xgoG6HFY5l0uoG05hwov6AC+gbuHWEos6xr6VRDEInasXkpUGeRSGtSlOfQ+G9Nz6dODoDx51cjPzh1NVnkeDq9izkMIawURxXhqTvHqxNVrP0u6EhmNbh8Bb6RuWjvgxiYDflrOx1NT7Pa8715u1n8M3AGLsuK+uFNhM/6UkGyn7gm42YcloD0BobAgMBAAECggEAFbuxFl6UdU1msLYL7+lPlBRJ5Okawkgy9KMfEyQpoYCUUeQYgDwkQqcacZxsFTLnnpHctVsN4E01XPRBkgd3cB/cVXivGsH3T4J6ySvjI95g8qYUHA7zQXnQp19YB6YVYNuF2k/t2Vwig3vKoh1KXUkQBuUer5Z72jC647HrktNKTiS+jq7oC9nYuSJU+wFL7VZH12oMQfWM6mBAMMrljpnaoi9NhuBphhsho181876zqj66BYWIijCuaPkgnYAVs82DfCEvOtSb2+eKUzgthV3obHMCHzxe0ZTTtt7u8A+/3D1h95vgfmXItEh426vI9v/0f02l9XBKybmyNg+1+QKBgQDho5fSrGohWRyNb5d2cj5bRMUxsJ+CTw79sQKCt8vnGJPr+Uuoo17uM+ZH0TtwC1PL6ShmjvPWCmgQdQhpHR5e6y5GEKiV8gXDt0qpN5wlacuGK4WqJM1MOhrBiOiX0tKcDfsxkelwN3mt2TGR4CW0e0DvqZggm7J4i4AvCxFstQKBgQDC7FKn4vw4VONC433Xfbz6An4jIocXsbv5DpWOPdoK3Ciw5JUPgE9DcCJP6z6m+9kNFnXHwYX0lKMsBMPugeRXJYdzw0299G21oHc4YKpHq4d+kHpi2b8TjBXBh+lJ2tN7GidtacACpbYbAmlTftDCe/W3pBdZ3G15vLzE5wB9jwKBgGvcJ9ctVA5c6qkxjtWwBt7aIOl/5MAFysS6uNiDw5TUyuEiamhSsC5t4Maz3hXRVF1FN2rPKwBGOTikuUCGCt6UzanwjKYg62CDXc1GJ/46dG/OnjaXIQwvOlsJdyYcQVEX3dv0RALAggn4qRlybJO513C5QV9VDhtRlBTo1YuBAoGAOLEtNSEihGvEEW9C6YrrjLdu4l8ndW+/ISfpvY4lvaTcvN4usGx8ITwa7q2X8k8riM/wf6G8iS816haUuejTdbk3lSbHlKjjw8ChDCepPuEXrmrs/ZUhKtlCdqBF7LIVcidgMkVgkCSMO3zPD3bB1t7gz4GNPRiMSqznJkmdbecCgYB8qIsME/VRzpwaWH12+dBZsWHqSylXO+HOnknxHYqlQ+6ax6A5XaRfVEXgrmIoI87mI1riht76CXa5LZQY/0A8BmJst9Wz7Z2ZlWcMGocddmJ7LfpdHErGSiIa/M5CEX8Yd2iEsNNPB/KC9z5HMMmcDST88rTqFrz5zFUENOJs6Q==
-----END PRIVATE KEY-----`;

let method = "POST"
let path = "/api/payment/v1/payments"

let body =pmlib.rs.utf8tob64(`{"nominal_currency":"TRX","nominal_amount":"537","pending_deadline_at":"2023-12-08T18:14:00.160Z","fees_payer":"CUSTOMER","customer_id":"1234567","order_id":"9876543"}`);

let ts = Math.floor(Date.now() / 1000) + 3600
let my_newPyload = `${method}:${path}:${body}:${ts}`
let sign = new pmlib.rs.KJUR.crypto.Signature({"alg": "SHA256withRSA"})
sign.init(apiPrivateKey)
let hexasignature = pmlib.rs.hextob64(sign.signString(my_newPyload))
let final_priv=pmlib.rs.stob64(`${hexasignature}:${ts}`);
console.log("Final Sign :- "+ final_priv)

            var settings = {
              "url": "https://api.pay.changelly.com/api/payment/v1/payments",
              "method": "POST",
              "timeout": 0,
              "headers": {
                "X-Api-Key": key_public,
                "X-Signature": final_priv,
                "Content-Type": "application/json"
              },
              "data": JSON.stringify({
    "nominal_currency": "TRX",
    "nominal_amount": "537",
    "pending_deadline_at": "2023-12-08T18:14:00.160Z",
    "fees_payer": "CUSTOMER",
    "customer_id": "1234567",
    "order_id": "9876543"
}),
            };
            
            $.ajax(settings).done(function (response) {
              console.log(response);
            }).catch((error)=>{
                console.log(error)
            })


    } else {
        console.error('fucck off not defined');
    }
</script>
