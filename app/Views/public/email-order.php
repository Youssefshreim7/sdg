<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>Order Email Notification</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Open Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
        <tbody>
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <img src="<?= base_url() . '/assets/public/' ?>/imgs/theme/logo-signee.png" alt=""
                                    style="width:auto;height: 150px;margin-bottom: 30px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="title"><?= $title; ?></h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>payment : <?= @$order['payment_option']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><?= $description; ?></p>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <div style="border-top:1px solid #777;height:1px;margin-top: 30px;">
                            </td>
                        </tr>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <h2 class="title">YOUR ORDER DETAILS</h2>
                            </td>
                        </tr>
                    </table>
                    <table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
                        <tr align="left">
                            <!-- <th>PRODUCT</th> -->
                            <th style="padding-left: 15px;">Product</th>
                            <th>QUANTITY</th>
                            <th>PRICE </th>
                        </tr>
                         <?php $total = 0; foreach ($order_items as $key => $arr) { ?>
                               <?php if($arr['item_status'] == '1'){ ?>
                        <tr>

                            <td valign="top" style="padding-left: 15px;">
                                <h5 style="margin-top: 15px;">
                                  <a href="<?= site_url('home/productdetails/'.$arr['product_id']); ?>" target="_blank"><?= $arr['name']; ?></a>
                                </h5>
                            </td>
                            <td valign="top" style="padding-left: 15px;">
                                <span style="font-size: 14px; color:#444;margin-top:15px;    margin-bottom: 0px;">
                                <h5 style="font-size: 14px; color:#444;margin-top: 10px;">QTY : <span><?= $arr['quantity']; ?></span></h5>
                            </td>
                            <td valign="top" style="padding-left: 15px;">
                                <h5 style="font-size: 14px; color:#444;margin-top:15px"><b><?= $arr['item_amount'] * $arr['quantity'] * $amounts['rate']; ?> <?= $amounts['currency']; ?></b></h5>
                            </td>
                        </tr>
                           <?php  } ?>
                        <?php } ?>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" align="left"
                        style="width: 100%;margin-top: 30px;    margin-bottom: 30px;">
                        <tbody>
                            <tr>
                                <td
                                    style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 100%;">
                                    <h5
                                        style="font-size: 16px; font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Totals</h5>
                                    <p
                                        style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        <b>Sub Total: </b> <span><?= @$amounts['sub_total']; ?></span> <br>
                                        <b>Shipping: </b> <span><?= @$amounts['shipping']; ?></span> <br>
                                        <b>Total Before Discount: </b> <span><?= @$amounts['total']; ?></span> <br>
                                        <b>Discount: </b> <span><?= @$amounts['discount']; ?></span> <br>
                                        <b>Total: </b> <span><?= @$amounts['total_discounted']; ?></span> <br>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" align="left"
                        style="width: 100%;margin-top: 30px;    margin-bottom: 30px;">
                        <tbody>
                            <tr>
                                <td
                                    style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 100%;">
                                    <h5
                                        style="font-size: 16px; font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        DILIVERY ADDRESS</h5>
                                    <p
                                        style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        <b>Address name: </b> <span><?= @$order['address_name']; ?></span> <br>
                                         <b>Area: </b> <span><?= @$order['area']; ?></span> <br>
                                        <b>Street: </b> <span><?= @$order['street']; ?></span> <br>
                                        <b>Building: </b> <span><?= @$order['building']; ?></span> <br>
                                        <b>Floor: </b> <span><?= @$order['floor']; ?></span> <br>
                                        <b>Additional note: </b> <span><?= @$order['additional_note']; ?></span> <br>
                                        <b>Client name: </b> <span><?= @$order['guest_name']; ?></span> <br>
                                        <b>Client phone: </b> <span><?= @$order['guest_phone']; ?></span> <br>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </td>
            </tr>
        </tbody>
    </table>
    <table class="main-bg-light text-center top-0" align="center" border="0" cellpadding="0" cellspacing="0"
        width="100%">
        <tr>
            <td style="padding: 30px;">
                <div>
                    <h4 class="title" style="margin:0;text-align: center;">Stay in the loop!</h4>
                </div>
                <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon" align="center"
                    class="text-center" style="margin-top:20px;">
                    <tr>
                        <td>
                            <a href="https://www.facebook.com/signee.net/?"><img src="<?= base_url() . '/assets/emails/facebook.png'; ?>" alt=""></a>
                        </td>
                        <td>
                            <a href="https://www.instagram.com/nano_b_lebanon/"><img src="<?= base_url() . '/assets/emails/instagram.png'; ?>" alt=""></a>
                        </td>
                        <td>
                            <a href="https://wa.me/96181814099"><img src="<?= base_url() . '/assets/emails/whatsapp.png'; ?>" alt="" height="40"></a>
                        </td>

                    </tr>
                </table>
                <div style="border-top: 1px solid #ddd; margin: 20px auto 0;"></div>
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0;">
                    <tr>
                        <td>
                            <a href="<?= site_url('home/contactinfo'); ?>" style="font-size:13px">Having any issue? Contact us</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="font-size:13px; margin:0;">SIGNEE</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
