<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') { ?>
  <script>
    $(document).ready(function() {
      Swal.fire({
        icon: "<?php echo $_SESSION['status_code']; ?>",
        text: "<?php echo $_SESSION['status_text']; ?>",
        showConfirmButton: true,
        // timer: 1500
      });
    });
  </script>
  <?php
  unset($_SESSION['status']);
}
?>

<!-- SweetAlert2 -->
<script src="assets/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="assets/toastr/toastr.min.js"></script>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<!-- datatable Js -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/apexcharts.min.js"></script>

<!-- custom-chart js -->
<script src="assets/js/dashboard-main.js"></script>

<!-- FullCalendar -->
<script src="assets/js/plugins/moment.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
<script src="assets/js/plugins/fullcalendar.min.js"></script>

<!-- Input mask Js -->
<script src="assets/js/plugins/jquery.mask.min.js"></script>
<!-- form-picker-custom Js -->
<script src="assets/js/form-masking-custom.js"></script>

<script src="assets/js/highcharts.js"></script>
<script src="assets/js/highcharts-3d.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#id_cabang').change(function() {
      var id_cabang = document.getElementById("id_cabang").value;
      var tanggal = document.getElementById("start").value;
      // console.log(id_cabang);

      $.ajax({
        type: 'POST',
        url: 'functions/pilih-pemasang.php',
        data: {
          'id_cabang': id_cabang,
          'tanggal': tanggal,
        },

        success: function(response) {
          $('#pemasang').html(response);
        }
      });
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#jenis_customer').change(function() {
      var jenis_customer = document.getElementById("jenis_customer").value;
      // console.log(id_cabang);

      $.ajax({
        type: 'POST',
        url: 'functions/form-booking-response.php',
        data: {
          'jenis_customer': jenis_customer,
        },

        success: function(response) {
          $('#data_customer').html(response);
        }
      });
    })
  });
</script>

<script type="text/javascript">
    $(window).on("load", function() {
      var id_cabang = document.getElementById("id_cabang").value;
      var tanggal = document.getElementById("start").value;
      // console.log(id_cabang);

      $.ajax({
        type: 'POST',
        url: 'functions/pilih-pemasang.php',
        data: {
          'id_cabang': id_cabang,
          'tanggal': tanggal,
        },

        success: function(response) {
          $('#pemasang').html(response);
        }
      });
    });
</script>
<script type="text/javascript">
  $('#ModalAdd').on('hidden.bs.modal', function(){
    $(this)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    // [ besic-bar-chart ] start
    setTimeout(function() {
      Highcharts.chart('chart-highchart-bar1', {
        chart: {
          type: 'column'
        },
        colors: ['#536dfe', '#000', '#9ccc65'],
        title: {
          text: 'Total Customer Perbulan'
        },
        subtitle: {
          text: ''
        },
        xAxis: {
          categories: [
          'Jan',
          'Feb',
          'Mar',
          'Apr',
          'May',
          'Jun',
          'Jul',
          'Aug',
          'Sep',
          'Oct',
          'Nov',
          'Dec'
          ],
          crosshair: true
        },
        yAxis: {
          min: 0,
          title: {
            text: 'Jumlah Customer'
          }
        },
        tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
        },
        plotOptions: {
          column: {
            pointPadding: 0.2,
            borderWidth: 0
          }
        },
        series: [{
          name: 'Instagram',
          data: [<?php echo $ig1['jumlah']; ?>, <?php echo $ig2['jumlah']; ?>, <?php echo $ig3['jumlah']; ?>, <?php echo $ig4['jumlah']; ?>, <?php echo $ig5['jumlah']; ?>, <?php echo $ig6['jumlah']; ?>, <?php echo $ig7['jumlah']; ?>, <?php echo $ig8['jumlah']; ?>, <?php echo $ig9['jumlah']; ?>, <?php echo $ig10['jumlah']; ?>, <?php echo $ig11['jumlah']; ?>, <?php echo $ig12['jumlah']; ?>]
        }, {
          name: 'Teman',
          data: [<?php echo $teman1['jumlah']; ?>, <?php echo $teman2['jumlah']; ?>, <?php echo $teman3['jumlah']; ?>, <?php echo $teman4['jumlah']; ?>, <?php echo $teman5['jumlah']; ?>, <?php echo $teman6['jumlah']; ?>, <?php echo $teman7['jumlah']; ?>, <?php echo $teman8['jumlah']; ?>, <?php echo $teman9['jumlah']; ?>, <?php echo $teman10['jumlah']; ?>, <?php echo $teman11['jumlah']; ?>, <?php echo $teman12['jumlah']; ?>]

        }, {
          name: 'Iklan',
          data: [<?php echo $iklan1['jumlah']; ?>, <?php echo $iklan2['jumlah']; ?>, <?php echo $iklan3['jumlah']; ?>, <?php echo $iklan4['jumlah']; ?>, <?php echo $iklan5['jumlah']; ?>, <?php echo $iklan6['jumlah']; ?>, <?php echo $iklan7['jumlah']; ?>, <?php echo $iklan8['jumlah']; ?>, <?php echo $iklan9['jumlah']; ?>, <?php echo $iklan10['jumlah']; ?>, <?php echo $iklan11['jumlah']; ?>, <?php echo $iklan12['jumlah']; ?>]

        }]
      });
    }, 700);
    // [ Column, line & pie-chart ] end
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#user-list-tablee').DataTable();
    $('#user-list-table').DataTable();
    $('#user-list-table-ret').DataTable();
    $('#user-list-table-rett').DataTable();
    $('#user-list-table-status').DataTable();
  });
</script>

<script>
  $(document).ready(function() {
    checkCookie();
  });

  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function checkCookie() {
    var ticks = getCookie("modelopen");
    if (ticks != "") {
      ticks++;
      setCookie("modelopen", ticks, 1);
      if (ticks == "2" || ticks == "1" || ticks == "0") {
        $('#exampleModalCenter').modal();
      }
    } else {
      // user = prompt("Please enter your name:", "");
      $('#exampleModalCenter').modal();
      ticks = 1;
      setCookie("modelopen", ticks, 1);
    }
  }
</script>

<script type="text/javascript">
  function deleteproduk(id) {
    var produkId = id;
    Swal.fire({
      title: 'Yakin Produk Akan Di Hapus?',
      text: "Produk Akan Di Hapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url: 'functions/delete.php',
          data: {
            id_produk: produkId
          },

          success: function(response) {
            Swal.fire(
              'Berhasil',
              'Produk Berhasil Di Hapus',
              'success',
              ).then((result) => {
                location.reload();
              });
            },
          })
      }
    })
  };
</script>

<script type="text/javascript">
  function deletetipe(id) {
    var tipeId = id;
    Swal.fire({
      title: 'Yakin tipe produk Akan Di Hapus?',
      text: "tipe produk Akan Di Hapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url: 'functions/delete.php',
          data: {
            id_tipe: tipeId
          },

          success: function(response) {
            Swal.fire(
              'Berhasil',
              'Tipe Produk Berhasil Di Hapus',
              'success',
              ).then((result) => {
                location.reload();
              });
            },
          })
      }
    })
  };
</script>

<script type="text/javascript">
  function deletecabang(id) {
    var cabangId = id;
    Swal.fire({
      title: 'Yakin Data Cabang Akan Di Hapus?',
      text: "Data Cabang Akan Di Hapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url: 'functions/delete.php',
          data: {
            id_cabang: cabangId
          },

          success: function(response) {
            Swal.fire(
              'Berhasil',
              'Data Cabang Berhasil Di Hapus',
              'success',
              ).then((result) => {
                location.reload();
              });
            },
          })
      }
    })
  };
</script>

<script type="text/javascript">
  function deleteusers(id) {
    var usersId = id;
    Swal.fire({
      title: 'Yakin Data Users Akan Di Hapus?',
      text: "Data Users Akan Di Hapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url: 'functions/delete.php',
          data: {
            id_users: usersId
          },

          success: function(response) {
            Swal.fire(
              'Berhasil',
              'Data Users Berhasil Di Hapus',
              'success',
              ).then((result) => {
                location.reload();
              });
            },
          })
      }
    })
  };
</script>

<script type="text/javascript">
  function deletebooking() {
    $('#ModalEdit').modal('hide');
    id_booking = document.getElementById("id").value;
    Swal.fire({
      title: 'Yakin Data Booking Akan Di Hapus?',
      text: "Data Akan Di Hapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url: 'functions/delete.php',
          data: {
            id_booking: id_booking
          },

          success: function(response) {
            Swal.fire(
              'Berhasil',
              'Booking Berhasil Di Hapus',
              'success',
              ).then((result) => {
                location.reload();
              });
            },
          })
      }
    })
  };
</script>

<script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month'
        // ,basicWeek,basicDay'
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      selectable: true,
      selectHelper: true,
      select: function(start, end) {

        $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
        $('#ModalAdd #end').val(moment(start).format('YYYY-MM-DD'));
        // $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD'));
        $('#ModalAdd').modal('show');
      },
      eventRender: function(event, element) {
        element.bind('dblclick', function() {
          $('#ModalEdit #id').val(event.id);
          $('#ModalEdit #title').val(event.title);
          $('#ModalEdit #color').val(event.color);
          $('#ModalEdit #no_telp').val(event.no_telp);
          $('#ModalEdit #sumber').val(event.sumber);
          $('#ModalEdit #id_cabang').val(event.id_cabang);
          $('#ModalEdit #id_produk').val(event.id_produk);
          $('#ModalEdit #kode_customer').val(event.kode_customer);
          $('#ModalEdit #harga').val(event.harga);
          $('#ModalEdit #id_tipe').val(event.id_tipe);
          $('#ModalEdit #id_users').val(event.id_users);
          $('#ModalEdit #transfer').val(event.transfer);
          $('#ModalEdit #cash').val(event.cash);
          $('#ModalEdit #id_produk').val(event.id_produk);
          $('#ModalEdit #keterangan').val(event.keterangan);
          $('#ModalEdit #start').val(event.starts);
          $('#ModalEdit #end').val(event.ends);
          $('#ModalEdit #start_jam').val(event.start_jam);
          $('#ModalEdit #ends_jam').val(event.ends_jam);
          $('#ModalEdit #tgl_retouch').val(event.tgl_retouch);
          $('#ModalEdit #tgl_lahir').val(event.tgl_lahir);
          $('#ModalEdit').modal('show');
        });
      },
      eventDrop: function(event, delta, revertFunc) { // si changement de position

        edit(event);

      },
      eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur

        edit(event);

      },
      events: [
      <?php foreach ($events as $event) :

        $start = explode(" ", $event['start']);
        $end = explode(" ", $event['ends']);

        $start = $event['start'];
        $end = $event['ends'];

        ?> {
          id: '<?php echo $event['id']; ?>',
          start: '<?php echo $start; ?>',
          end: '<?php echo $end; ?>',
          color: '<?php echo $event['warna']; ?>',
          title: '<?php echo $event['nama_customer'] ?>',
          no_telp: '<?php echo $event['no_telp'] ?>',
          sumber: '<?php echo $event['sumber'] ?>',
          tgl_lahir: '<?php echo $event['tgl_lahir'] ?>',
          id_cabang: '<?php echo $event['id_cabang']; ?>',
          id_produk: '<?php echo $event['id_produk']; ?>',
          kode_customer: '<?php echo $event['kode_customer']; ?>',
          harga: '<?php echo $event['harga']; ?>',
          id_tipe: '<?php echo $event['id_tipe']; ?>',
          id_users: '<?php echo $event['id_users']; ?>',
          transfer: '<?php echo $event['transfer']; ?>',
          cash: '<?php echo $event['cash']; ?>',
          id_produk: '<?php echo $event['id_produk']; ?>',
          keterangan: '<?php echo $event['keterangan']; ?>',
          start_jam: '<?php echo $event['start_jam']; ?>',
          ends_jam: '<?php echo $event['ends_jam']; ?>',
          starts: '<?php echo $event['start']; ?>',
          ends: '<?php echo $event['ends']; ?>',
          tgl_retouch: '<?php echo $event['tgl_retouch']; ?>',
        },
      <?php endforeach; ?>
      ]
    });

    function edit(event) {
      start = event.start.format('YYYY-MM-DD');
      if (event.end) {
        end = event.end.format('YYYY-MM-DD');
      } else {
        end = start;
      }

      id = event.id;

      Event = [];
      Event[0] = id;
      Event[1] = start;
      Event[2] = end;

      $.ajax({
        url: 'functions/proses-booking.php',
        type: "POST",
        data: {
          Event: Event
        },
        success: function(response) {
          if (response == 'sukses') {
            Swal.fire(
              'Berhasil',
              'Data berhasil di pindahkan',
              'success',
              ).then((result) => {
                window.location.href = "booking";
              });
            } else {
              Swal.fire(
                'Gagal',
                'Data gagal di pindahkan',
                'error',
                ).then((result) => {
                  window.location.href = "booking";
                });
              }
            }
          });
    }

  });
</script>

<script type="text/javascript">
  <?php echo $jsArrayy; ?>

  function changeValue(id_produk) {
    var harga = document.getElementById("hrg").value = hrg_brgg[id_produk].hrg;
    console.log(harga);
  };
</script>

<script type="text/javascript">
  <?php echo $jsArray; ?>

  function changeValueEdit(id_produk) {
    document.getElementById("harga").value = hrg_brg[id_produk].harga;
  };
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#produk').change(function() {
      var id_produk = $(this).val();
      var data_start = document.getElementById("start").value;

      $.ajax({
        type: 'POST',
        url: 'functions/cari-retouch.php',
        data: {
          'id_produk': id_produk,
          'start': data_start
        },

        success: function(response) {
          $('#tgl_retouch').html(response);
        }
      });
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#start_jam').click(function() {
      var data_start_jam = document.getElementById("start_jam").value;

      $.ajax({
        type: 'POST',
        url: 'functions/hitung-jam.php',
        data: {
          'start_jam': data_start_jam,
        },

        success: function(response) {
          $('#jam_ends').html(response);
        }
      });
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#level').change(function() {
      var level = $(this).val();
      var hari_libur = document.getElementById("hari_libur").val;
      var id_cabang = document.getElementById("id_cabang").val;
      if ( level == '1') {
        id_cabang.hide();
        hari_libur.hide();
      } else if {
        id_cabang.show();
        hari_libur.show();
      } else {
        id_cabang.hide();
        hari_libur.hide();
      }
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#produk').keyup(function() {
      var jam = $('#produk').val();

      console.log(jam);
    });
  });
</script>

<script type="text/javascript">
  var iconlistbrand = ['fa-500px', 'fa-accessible-icon', 'fa-accusoft', 'fa-acquisitions-incorporated', 'fa-adn', 'fa-adobe', 'fa-adversal', 'fa-affiliatetheme', 'fa-algolia', 'fa-alipay', 'fa-amazon', 'fa-amazon-pay',
  'fa-amilia', 'fa-android', 'fa-angellist', 'fa-angrycreative', 'fa-angular', 'fa-app-store', 'fa-app-store-ios', 'fa-apper', 'fa-apple', 'fa-apple-pay', 'fa-artstation', 'fa-asymmetrik', 'fa-atlassian', 'fa-audible',
  'fa-autoprefixer', 'fa-avianex', 'fa-aviato', 'fa-aws', 'fa-bandcamp', 'fa-behance', 'fa-behance-square', 'fa-bitbucket', 'fa-bitcoin', 'fa-bity', 'fa-black-tie', 'fa-blackberry', 'fa-bimobject', 'fa-blogger', 'fa-blogger-b',
  'fa-bluetooth', 'fa-bluetooth-b', 'fa-btc', 'fa-buromobelexperte', 'fa-buysellads', 'fa-canadian-maple-leaf', 'fa-cc-amazon-pay', 'fa-cc-amex', 'fa-cc-apple-pay', 'fa-cc-diners-club', 'fa-cc-discover', 'fa-cc-jcb',
  'fa-cc-mastercard', 'fa-cc-paypal', 'fa-cc-stripe', 'fa-cc-visa', 'fa-centercode', 'fa-centos', 'fa-chrome', 'fa-cloudscale', 'fa-cloudsmith', 'fa-cloudversify', 'fa-codepen', 'fa-codiepie', 'fa-confluence', 'fa-connectdevelop',
  'fa-contao', 'fa-cpanel', 'fa-creative-commons', 'fa-creative-commons-by', 'fa-creative-commons-nc', 'fa-creative-commons-nc-eu', 'fa-creative-commons-nc-jp', 'fa-creative-commons-nd', 'fa-creative-commons-pd',
  'fa-creative-commons-pd-alt',
  'fa-creative-commons-remix', 'fa-creative-commons-sa', 'fa-creative-commons-sampling', 'fa-creative-commons-sampling-plus', 'fa-creative-commons-share', 'fa-creative-commons-zero', 'fa-critical-role', 'fa-css3', 'fa-css3-alt',
  'fa-cuttlefish', 'fa-dashcube', 'fa-delicious', 'fa-deploydog', 'fa-deskpro', 'fa-dev', 'fa-deviantart', 'fa-dhl', 'fa-diaspora', 'fa-digg', 'fa-digital-ocean', 'fa-discord', 'fa-discourse', 'fa-dochub', 'fa-docker',
  'fa-draft2digital',
  'fa-dribbble', 'fa-dribbble-square', 'fa-dropbox', 'fa-drupal', 'fa-dyalog', 'fa-earlybirds', 'fa-ebay', 'fa-edge', 'fa-elementor', 'fa-ello', 'fa-ember', 'fa-empire', 'fa-envira', 'fa-erlang', 'fa-ethereum', 'fa-etsy',
  'fa-expeditedssl',
  'fa-facebook', 'fa-facebook-f', 'fa-facebook-messenger', 'fa-facebook-square', 'fa-fantasy-flight-games', 'fa-fedex', 'fa-fedora', 'fa-figma', 'fa-firefox', 'fa-first-order', 'fa-first-order-alt', 'fa-firstdraft', 'fa-flickr',
  'fa-flipboard',
  'fa-fly', 'fa-font-awesome', 'fa-font-awesome-alt', 'fa-font-awesome-flag', 'fa-fonticons', 'fa-fonticons-fi', 'fa-fort-awesome', 'fa-fort-awesome-alt', 'fa-forumbee', 'fa-foursquare', 'fa-free-code-camp', 'fa-freebsd', 'fa-fulcrum',
  'fa-galactic-republic', 'fa-galactic-senate', 'fa-get-pocket', 'fa-gg', 'fa-gg-circle', 'fa-git', 'fa-git-square', 'fa-github', 'fa-github-alt', 'fa-github-square', 'fa-gitkraken', 'fa-gitlab', 'fa-gitter', 'fa-glide', 'fa-glide-g',
  'fa-gofore', 'fa-goodreads', 'fa-goodreads-g', 'fa-google', 'fa-google-drive', 'fa-google-play', 'fa-google-plus', 'fa-google-plus-g', 'fa-google-plus-square', 'fa-google-wallet', 'fa-gratipay', 'fa-grav', 'fa-gripfire', 'fa-grunt',
  'fa-gulp', 'fa-hacker-news', 'fa-hacker-news-square', 'fa-hackerrank', 'fa-hips', 'fa-hire-a-helper', 'fa-hooli', 'fa-hornbill', 'fa-hotjar', 'fa-houzz', 'fa-html5', 'fa-hubspot', 'fa-imdb', 'fa-instagram', 'fa-intercom',
  'fa-internet-explorer',
  'fa-invision', 'fa-ioxhost', 'fa-itunes', 'fa-itunes-note', 'fa-java', 'fa-jedi-order', 'fa-jenkins', 'fa-jira', 'fa-joget', 'fa-joomla', 'fa-js', 'fa-js-square', 'fa-jsfiddle', 'fa-kaggle', 'fa-keybase', 'fa-keycdn',
  'fa-kickstarter',
  'fa-kickstarter-k', 'fa-korvue', 'fa-laravel', 'fa-lastfm', 'fa-lastfm-square', 'fa-leanpub', 'fa-less', 'fa-line', 'fa-linkedin', 'fa-linkedin-in', 'fa-linode', 'fa-linux', 'fa-lyft', 'fa-magento', 'fa-mailchimp', 'fa-mandalorian',
  'fa-markdown', 'fa-mastodon', 'fa-maxcdn', 'fa-medapps', 'fa-medium', 'fa-medium-m', 'fa-medrt', 'fa-meetup', 'fa-megaport', 'fa-mendeley', 'fa-microsoft', 'fa-mix', 'fa-mixcloud', 'fa-mizuni', 'fa-modx', 'fa-monero', 'fa-napster',
  'fa-neos', 'fa-nimblr', 'fa-nintendo-switch', 'fa-node', 'fa-node-js', 'fa-npm', 'fa-ns8', 'fa-nutritionix', 'fa-odnoklassniki', 'fa-odnoklassniki-square', 'fa-old-republic', 'fa-opencart', 'fa-openid', 'fa-opera', 'fa-optin-monster',
  'fa-osi', 'fa-page4', 'fa-pagelines', 'fa-palfed', 'fa-patreon', 'fa-paypal', 'fa-penny-arcade', 'fa-periscope', 'fa-phabricator', 'fa-phoenix-framework', 'fa-phoenix-squadron', 'fa-php', 'fa-pied-piper', 'fa-pied-piper-alt',
  'fa-pied-piper-hat', 'fa-pied-piper-pp', 'fa-pinterest', 'fa-pinterest-p', 'fa-pinterest-square', 'fa-playstation', 'fa-product-hunt', 'fa-pushed', 'fa-python', 'fa-qq', 'fa-pushed', 'fa-python', 'fa-qq', 'fa-quinscape', 'fa-quora',
  'fa-raspberry-pi', 'fa-ravelry', 'fa-react', 'fa-reacteurope', 'fa-readme', 'fa-rebel', 'fa-red-river', 'fa-reddit', 'fa-reddit-alien', 'fa-reddit-square', 'fa-redhat', 'fa-renren', 'fa-replyd', 'fa-researchgate', 'fa-resolving',
  'fa-rev',
  'fa-rocketchat', 'fa-rockrms', 'fa-safari', 'fa-sass', 'fa-schlix', 'fa-scribd', 'fa-searchengin', 'fa-sellcast', 'fa-sellsy', 'fa-servicestack', 'fa-shirtsinbulk', 'fa-shopware', 'fa-staylinked', 'fa-steam', 'fa-steam-square',
  'fa-steam-symbol', 'fa-sticker-mule', 'fa-strava', 'fa-stripe', 'fa-stripe-s', 'fa-studiovinari', 'fa-stumbleupon', 'fa-stumbleupon-circle', 'fa-superpowers', 'fa-supple', 'fa-suse', 'fa-teamspeak', 'fa-simplybuilt', 'fa-sistrix',
  'fa-sith', 'fa-sketch', 'fa-skyatlas', 'fa-skype', 'fa-slack', 'fa-slack-hash', 'fa-slideshare', 'fa-snapchat', 'fa-snapchat-ghost', 'fa-snapchat-square', 'fa-soundcloud', 'fa-sourcetree', 'fa-speakap', 'fa-spotify', 'fa-squarespace',
  'fa-stack-exchange', 'fa-stack-overflow', 'fa-telegram', 'fa-telegram-plane', 'fa-tencent-weibo', 'fa-the-red-yeti', 'fa-themeco', 'fa-themeisle', 'fa-think-peaks', 'fa-trade-federation', 'fa-trello', 'fa-tripadvisor', 'fa-tumblr',
  'fa-tumblr-square', 'fa-twitch', 'fa-twitter', 'fa-twitter-square', 'fa-typo3', 'fa-uber', 'fa-ubuntu', 'fa-uikit', 'fa-uniregistry', 'fa-untappd', 'fa-ups', 'fa-usb', 'fa-usps', 'fa-ussunnah', 'fa-vaadin', 'fa-viacoin', 'fa-viadeo',
  'fa-viadeo-square', 'fa-viber', 'fa-vimeo', 'fa-vimeo-v', 'fa-vimeo-square', 'fa-vine', 'fa-vk', 'fa-vnv', 'fa-vuejs', 'fa-weebly', 'fa-weibo', 'fa-weixin', 'fa-whatsapp', 'fa-whatsapp-square', 'fa-whmcs', 'fa-wikipedia-w',
  'fa-windows',
  'fa-wix', 'fa-wizards-of-the-coast', 'fa-wolf-pack-battalion', 'fa-wordpress', 'fa-wordpress-simple', 'fa-wpbeginner', 'fa-wpexplorer', 'fa-wpforms', 'fa-wpressr', 'fa-xbox', 'fa-xing', 'fa-xing-square', 'fa-yahoo', 'fa-yandex',
  'fa-yandex-international', 'fa-yarn', 'fa-yelp', 'fa-yoast', 'fa-youtube', 'fa-youtube-square', 'fa-zhihu'

  ];
  var iconlist = ['fa-ad', 'fa-address-book', 'fa-address-card', 'fa-adjust', 'fa-air-freshener', 'fa-align-center', 'fa-align-justify', 'fa-align-left', 'fa-align-right', 'fa-allergies', 'fa-ambulance',
  'fa-american-sign-language-interpreting', 'fa-italic',
  'fa-anchor', 'fa-angle-double-down', 'fa-angle-double-left', 'fa-angle-double-right', 'fa-angle-double-up', 'fa-angle-down', 'fa-angle-left', 'fa-angle-right', 'fa-angle-up', 'fa-angry', 'fa-ankh', 'fa-apple-alt', 'fa-archive',
  'fa-archway',
  'fa-arrow-alt-circle-down', 'fa-arrow-alt-circle-left', 'fa-arrow-alt-circle-right', 'fa-arrow-alt-circle-up', 'fa-arrow-circle-down', 'fa-arrow-circle-left', 'fa-arrow-circle-right', 'fa-arrow-circle-up', 'fa-arrow-down',
  'fa-arrow-left',
  'fa-arrow-right', 'fa-arrow-up', 'fa-arrows-alt', 'fa-arrows-alt-h', 'fa-arrows-alt-v', 'fa-assistive-listening-systems', 'fa-asterisk', 'fa-at', 'fa-atlas', 'fa-atom', 'fa-audio-description', 'fa-award', 'fa-baby',
  'fa-baby-carriage', 'fa-backspace',
  'fa-backward', 'fa-balance-scale', 'fa-ban', 'fa-band-aid', 'fa-barcode', 'fa-bars', 'fa-baseball-ball', 'fa-basketball-ball', 'fa-bath', 'fa-battery-empty', 'fa-battery-full', 'fa-battery-half', 'fa-battery-quarter',
  'fa-battery-three-quarters', 'fa-bed',
  'fa-beer', 'fa-bell', 'fa-bell-slash', 'fa-bezier-curve', 'fa-bible', 'fa-bicycle', 'fa-binoculars', 'fa-biohazard', 'fa-birthday-cake', 'fa-blender', 'fa-blender-phone', 'fa-blind', 'fa-blog', 'fa-bold', 'fa-bolt', 'fa-bomb',
  'fa-bone', 'fa-bong', 'fa-book',
  'fa-book-dead', 'fa-book-open', 'fa-book-reader', 'fa-bookmark', 'fa-bowling-ball', 'fa-box', 'fa-box-open', 'fa-boxes', 'fa-braille', 'fa-brain', 'fa-briefcase', 'fa-briefcase-medical', 'fa-broadcast-tower', 'fa-broom', 'fa-brush',
  'fa-bug', 'fa-building',
  'fa-bullhorn', 'fa-bullseye', 'fa-burn', 'fa-bus', 'fa-bus-alt', 'fa-business-time', 'fa-calculator', 'fa-calendar', 'fa-calendar-alt', 'fa-calendar-check', 'fa-calendar-day', 'fa-calendar-minus', 'fa-calendar-plus',
  'fa-calendar-times', 'fa-calendar-week',
  'fa-camera', 'fa-camera-retro', 'fa-campground', 'fa-candy-cane', 'fa-cannabis', 'fa-capsules', 'fa-car', 'fa-car-alt', 'fa-car-battery', 'fa-car-crash', 'fa-car-side', 'fa-caret-down', 'fa-caret-left', 'fa-caret-right',
  'fa-caret-square-down', 'fa-caret-square-left',
  'fa-caret-square-right', 'fa-caret-square-up', 'fa-caret-up', 'fa-carrot', 'fa-cart-arrow-down', 'fa-cart-plus', 'fa-cash-register', 'fa-cat', 'fa-certificate', 'fa-chair', 'fa-chalkboard', 'fa-chalkboard-teacher',
  'fa-charging-station', 'fa-chart-area',
  'fa-chart-bar', 'fa-chart-line', 'fa-chart-pie', 'fa-check', 'fa-check-circle', 'fa-check-double', 'fa-check-square', 'fa-chess', 'fa-chess-bishop', 'fa-chess-board', 'fa-chess-king', 'fa-chess-knight', 'fa-chess-pawn',
  'fa-chess-queen', 'fa-chess-rook',
  'fa-chevron-circle-down', 'fa-chevron-circle-left', 'fa-chevron-circle-right', 'fa-chevron-circle-up', 'fa-chevron-down', 'fa-chevron-left', 'fa-chevron-right', 'fa-chevron-up', 'fa-child', 'fa-church', 'fa-circle', 'fa-circle-notch',
  'fa-city', 'fa-clipboard',
  'fa-clipboard-check', 'fa-clipboard-list', 'fa-clock', 'fa-clone', 'fa-closed-captioning', 'fa-cloud', 'fa-cloud-download-alt', 'fa-cloud-meatball', 'fa-cloud-moon', 'fa-cloud-moon-rain', 'fa-cloud-rain', 'fa-cloud-showers-heavy',
  'fa-cloud-sun', 'fa-cloud-sun-rain',
  'fa-cloud-upload-alt', 'fa-cocktail', 'fa-code', 'fa-code-branch', 'fa-coffee', 'fa-cog', 'fa-cogs', 'fa-coins', 'fa-columns', 'fa-comment', 'fa-comment-alt', 'fa-comment-dollar', 'fa-comment-dots', 'fa-comment-slash', 'fa-comments',
  'fa-comments-dollar', 'fa-compact-disc',
  'fa-compass', 'fa-compress', 'fa-compress-arrows-alt', 'fa-concierge-bell', 'fa-cookie', 'fa-cookie-bite', 'fa-copy', 'fa-copyright', 'fa-couch', 'fa-credit-card', 'fa-crop', 'fa-crop-alt', 'fa-cross', 'fa-crosshairs', 'fa-crow',
  'fa-crown', 'fa-cube', 'fa-cubes', 'fa-cut',
  'fa-database', 'fa-deaf', 'fa-democrat', 'fa-desktop', 'fa-dharmachakra', 'fa-diagnoses', 'fa-dice', 'fa-dice-d20', 'fa-dice-d6', 'fa-dice-five', 'fa-dice-four', 'fa-dice-one', 'fa-dice-six', 'fa-dice-three', 'fa-dice-two',
  'fa-digital-tachograph', 'fa-directions',
  'fa-divide', 'fa-dizzy', 'fa-dna', 'fa-dog', 'fa-dollar-sign', 'fa-dolly', 'fa-dolly-flatbed', 'fa-donate', 'fa-door-closed', 'fa-door-open', 'fa-dot-circle', 'fa-dove', 'fa-download', 'fa-drafting-compass', 'fa-dragon',
  'fa-draw-polygon', 'fa-drum', 'fa-drum-steelpan',
  'fa-drumstick-bite', 'fa-dumbbell', 'fa-dumpster', 'fa-dumpster-fire', 'fa-dungeon', 'fa-edit', 'fa-eject', 'fa-ellipsis-h', 'fa-ellipsis-v', 'fa-envelope', 'fa-envelope-open', 'fa-envelope-open-text', 'fa-envelope-square',
  'fa-equals', 'fa-eraser', 'fa-ethernet', 'fa-euro-sign',
  'fa-exchange-alt', 'fa-exclamation', 'fa-exclamation-circle', 'fa-exclamation-triangle', 'fa-expand', 'fa-expand-arrows-alt', 'fa-external-link-alt', 'fa-external-link-square-alt', 'fa-eye', 'fa-eye-dropper', 'fa-eye-slash',
  'fa-fast-backward', 'fa-fast-forward', 'fa-fax',
  'fa-feather', 'fa-feather-alt', 'fa-female', 'fa-fighter-jet', 'fa-file', 'fa-file-alt', 'fa-file-archive', 'fa-file-audio', 'fa-file-code', 'fa-file-contract', 'fa-file-csv', 'fa-file-download', 'fa-file-excel', 'fa-file-export',
  'fa-file-image', 'fa-file-import', 'fa-file-invoice',
  'fa-file-invoice-dollar', 'fa-file-medical', 'fa-file-medical-alt', 'fa-file-pdf', 'fa-file-powerpoint', 'fa-file-prescription', 'fa-file-signature', 'fa-file-upload', 'fa-file-video', 'fa-file-word', 'fa-fill', 'fa-fill-drip',
  'fa-film', 'fa-filter', 'fa-fingerprint', 'fa-fire',
  'fa-fire-alt', 'fa-fire-extinguisher', 'fa-first-aid', 'fa-fish', 'fa-fist-raised', 'fa-flag', 'fa-flag-checkered', 'fa-flag-usa', 'fa-flask', 'fa-flushed', 'fa-folder', 'fa-folder-minus', 'fa-folder-open', 'fa-folder-plus',
  'fa-font', 'fa-football-ball', 'fa-forward', 'fa-frog',
  'fa-frown', 'fa-frown-open', 'fa-funnel-dollar', 'fa-futbol', 'fa-gamepad', 'fa-gas-pump', 'fa-gavel', 'fa-gem', 'fa-genderless', 'fa-ghost', 'fa-gift', 'fa-gifts', 'fa-glass-cheers', 'fa-glass-martini', 'fa-glass-martini-alt',
  'fa-glass-whiskey', 'fa-glasses', 'fa-globe',
  'fa-globe-africa', 'fa-globe-americas', 'fa-globe-asia', 'fa-globe-europe', 'fa-golf-ball', 'fa-gopuram', 'fa-graduation-cap', 'fa-greater-than', 'fa-greater-than-equal', 'fa-grimace', 'fa-grin', 'fa-grin-alt', 'fa-grin-beam',
  'fa-grin-beam-sweat', 'fa-grin-hearts',
  'fa-grin-squint', 'fa-grin-squint-tears', 'fa-grin-stars', 'fa-grin-tears', 'fa-grin-tongue', 'fa-grin-tongue-squint', 'fa-grin-tongue-wink', 'fa-grin-wink', 'fa-grip-horizontal', 'fa-grip-lines', 'fa-grip-lines-vertical',
  'fa-grip-vertical', 'fa-guitar', 'fa-hammer',
  'fa-hamsa', 'fa-hand-holding', 'fa-hand-holding-heart', 'fa-hand-holding-usd', 'fa-hand-lizard', 'fa-hand-paper', 'fa-hand-peace', 'fa-hand-point-down', 'fa-hand-point-left', 'fa-hand-point-right', 'fa-hand-point-up',
  'fa-hand-pointer', 'fa-hand-rock', 'fa-hand-scissors',
  'fa-hand-spock', 'fa-hands', 'fa-hands-helping', 'fa-handshake', 'fa-hanukiah', 'fa-hashtag', 'fa-hat-wizard', 'fa-haykal', 'fa-hdd', 'fa-heading', 'fa-headphones', 'fa-headphones-alt', 'fa-headset', 'fa-heart', 'fa-heart-broken',
  'fa-heartbeat', 'fa-helicopter', 'fa-highlighter',
  'fa-hiking', 'fa-hippo', 'fa-history', 'fa-hockey-puck', 'fa-holly-berry', 'fa-home', 'fa-horse', 'fa-horse-head', 'fa-hospital', 'fa-hospital-alt', 'fa-hospital-symbol', 'fa-hot-tub', 'fa-hotel', 'fa-hourglass', 'fa-hourglass-end',
  'fa-hourglass-half', 'fa-hourglass-start',
  'fa-house-damage', 'fa-hryvnia', 'fa-icicles', 'fa-id-badge', 'fa-id-card', 'fa-id-card-alt', 'fa-igloo', 'fa-image', 'fa-images', 'fa-inbox', 'fa-indent', 'fa-industry', 'fa-infinity', 'fa-info', 'fa-info-circle', 'fa-jedi',
  'fa-joint', 'fa-journal-whills', 'fa-kaaba', 'fa-key',
  'fa-keyboard', 'fa-khanda', 'fa-kiss', 'fa-kiss-beam', 'fa-kiss-wink-heart', 'fa-kiwi-bird', 'fa-landmark', 'fa-language', 'fa-laptop', 'fa-laptop-code', 'fa-laugh', 'fa-laugh-beam', 'fa-laugh-squint', 'fa-laugh-wink',
  'fa-layer-group', 'fa-leaf', 'fa-lemon', 'fa-less-than',
  'fa-less-than-equal', 'fa-level-down-alt', 'fa-level-up-alt', 'fa-life-ring', 'fa-lightbulb', 'fa-link', 'fa-lira-sign', 'fa-list', 'fa-list-alt', 'fa-list-ol', 'fa-list-ul', 'fa-location-arrow', 'fa-lock', 'fa-lock-open',
  'fa-long-arrow-alt-down', 'fa-long-arrow-alt-left',
  'fa-long-arrow-alt-right', 'fa-long-arrow-alt-up', 'fa-low-vision', 'fa-luggage-cart', 'fa-magic', 'fa-magnet', 'fa-mail-bulk', 'fa-male', 'fa-map', 'fa-map-marked', 'fa-map-marked-alt', 'fa-map-marker', 'fa-map-marker-alt',
  'fa-map-pin', 'fa-map-signs', 'fa-marker', 'fa-mars',
  'fa-mars-double', 'fa-mars-stroke', 'fa-mars-stroke-v', 'fa-mask', 'fa-medal', 'fa-medkit', 'fa-meh', 'fa-meh-blank', 'fa-meh-rolling-eyes', 'fa-memory', 'fa-menorah', 'fa-mercury', 'fa-meteor', 'fa-microchip', 'fa-microphone',
  'fa-microphone-alt', 'fa-microphone-alt-slash',
  'fa-microphone-slash', 'fa-microscope', 'fa-minus', 'fa-minus-circle', 'fa-minus-square', 'fa-mitten', 'fa-mobile', 'fa-mobile-alt', 'fa-money-bill', 'fa-money-bill-alt', 'fa-money-bill-wave', 'fa-money-bill-wave-alt',
  'fa-money-check', 'fa-money-check-alt', 'fa-monument',
  'fa-moon', 'fa-mortar-pestle', 'fa-mosque', 'fa-motorcycle', 'fa-mountain', 'fa-mouse-pointer', 'fa-mug-hot', 'fa-music', 'fa-network-wired', 'fa-neuter', 'fa-newspaper', 'fa-not-equal', 'fa-notes-medical', 'fa-object-group',
  'fa-object-ungroup', 'fa-oil-can', 'fa-om', 'fa-otter',
  'fa-outdent', 'fa-paint-brush', 'fa-paint-roller', 'fa-palette', 'fa-pallet', 'fa-paper-plane', 'fa-paperclip', 'fa-parachute-box', 'fa-paragraph', 'fa-parking', 'fa-passport', 'fa-pastafarianism', 'fa-paste', 'fa-pause',
  'fa-pause-circle', 'fa-paw', 'fa-peace', 'fa-pen', 'fa-pen-alt',
  'fa-pen-fancy', 'fa-pen-nib', 'fa-pen-square', 'fa-pencil-alt', 'fa-pencil-ruler', 'fa-people-carry', 'fa-percent', 'fa-percentage', 'fa-person-booth', 'fa-phone', 'fa-phone-slash', 'fa-phone-square', 'fa-phone-volume',
  'fa-piggy-bank', 'fa-pills', 'fa-place-of-worship', 'fa-plane',
  'fa-plane-arrival', 'fa-plane-departure', 'fa-play', 'fa-play-circle', 'fa-plug', 'fa-plus', 'fa-plus-circle', 'fa-plus-square', 'fa-podcast', 'fa-poll', 'fa-poll-h', 'fa-poo', 'fa-poo-storm', 'fa-poop', 'fa-portrait',
  'fa-pound-sign', 'fa-power-off', 'fa-pray', 'fa-praying-hands',
  'fa-prescription', 'fa-prescription-bottle', 'fa-prescription-bottle-alt', 'fa-print', 'fa-procedures', 'fa-project-diagram', 'fa-puzzle-piece', 'fa-qrcode', 'fa-question', 'fa-question-circle', 'fa-quidditch', 'fa-quote-left',
  'fa-quote-right', 'fa-quran', 'fa-radiation',
  'fa-radiation-alt', 'fa-rainbow', 'fa-random', 'fa-receipt', 'fa-recycle', 'fa-redo', 'fa-redo-alt', 'fa-registered', 'fa-reply', 'fa-reply-all', 'fa-republican', 'fa-restroom', 'fa-retweet', 'fa-ribbon', 'fa-ring', 'fa-road',
  'fa-robot', 'fa-rocket', 'fa-route', 'fa-rss',
  'fa-rss-square', 'fa-ruble-sign', 'fa-ruler', 'fa-ruler-combined', 'fa-ruler-horizontal', 'fa-ruler-vertical', 'fa-running', 'fa-rupee-sign', 'fa-sad-cry', 'fa-sad-tear', 'fa-satellite', 'fa-satellite-dish', 'fa-save', 'fa-school',
  'fa-screwdriver', 'fa-scroll',
  'fa-sd-card', 'fa-search', 'fa-search-dollar', 'fa-search-location', 'fa-search-minus', 'fa-search-plus', 'fa-seedling', 'fa-server', 'fa-shapes', 'fa-share', 'fa-share-alt', 'fa-share-alt-square', 'fa-share-square', 'fa-shekel-sign',
  'fa-shield-alt', 'fa-ship',
  'fa-shipping-fast', 'fa-shoe-prints', 'fa-shopping-bag', 'fa-shopping-basket', 'fa-shopping-cart', 'fa-shower', 'fa-shuttle-van', 'fa-sign', 'fa-sign-in-alt', 'fa-sign-language', 'fa-sign-out-alt', 'fa-signal', 'fa-signature',
  'fa-sim-card', 'fa-sitemap', 'fa-skating',
  'fa-skiing', 'fa-skiing-nordic', 'fa-skull', 'fa-skull-crossbones', 'fa-slash', 'fa-sleigh', 'fa-sliders-h', 'fa-smile', 'fa-smile-beam', 'fa-smile-wink', 'fa-smog', 'fa-smoking', 'fa-smoking-ban', 'fa-sms', 'fa-snowboarding',
  'fa-snowflake', 'fa-snowman', 'fa-snowplow',
  'fa-socks', 'fa-solar-panel', 'fa-sort', 'fa-sort-alpha-down', 'fa-sort-alpha-up', 'fa-sort-amount-down', 'fa-sort-amount-up', 'fa-sort-down', 'fa-sort-numeric-down', 'fa-sort-numeric-up', 'fa-sort-up', 'fa-spa', 'fa-space-shuttle',
  'fa-spider', 'fa-spinner',
  'fa-splotch', 'fa-spray-can', 'fa-square', 'fa-square-full', 'fa-square-root-alt', 'fa-stamp', 'fa-star', 'fa-star-and-crescent', 'fa-star-half', 'fa-star-half-alt', 'fa-star-of-david', 'fa-star-of-life', 'fa-step-backward',
  'fa-step-forward', 'fa-stethoscope',
  'fa-sticky-note', 'fa-stop', 'fa-stop-circle', 'fa-stopwatch', 'fa-store', 'fa-store-alt', 'fa-stream', 'fa-street-view', 'fa-strikethrough', 'fa-stroopwafel', 'fa-subscript', 'fa-subway', 'fa-suitcase', 'fa-suitcase-rolling',
  'fa-sun', 'fa-superscript', 'fa-surprise',
  'fa-swatchbook', 'fa-swimmer', 'fa-swimming-pool', 'fa-synagogue', 'fa-sync', 'fa-sync-alt', 'fa-syringe', 'fa-table', 'fa-table-tennis', 'fa-tablet', 'fa-tablet-alt', 'fa-tablets', 'fa-tachometer-alt', 'fa-tag', 'fa-tags', 'fa-tape',
  'fa-tasks', 'fa-taxi', 'fa-teeth',
  'fa-teeth-open', 'fa-temperature-high', 'fa-temperature-low', 'fa-tenge', 'fa-terminal', 'fa-text-height', 'fa-text-width', 'fa-th', 'fa-th-large', 'fa-th-list', 'fa-theater-masks', 'fa-thermometer', 'fa-thermometer-empty',
  'fa-thermometer-full', 'fa-thermometer-half',
  'fa-thermometer-quarter', 'fa-thermometer-three-quarters', 'fa-thumbs-down', 'fa-thumbs-up', 'fa-thumbtack', 'fa-ticket-alt', 'fa-times', 'fa-times-circle', 'fa-tint', 'fa-tint-slash', 'fa-tired', 'fa-toggle-off', 'fa-toggle-on',
  'fa-toilet', 'fa-toilet-paper',
  'fa-toolbox', 'fa-tools', 'fa-tooth', 'fa-torah', 'fa-torii-gate', 'fa-tractor', 'fa-trademark', 'fa-traffic-light', 'fa-train', 'fa-tram', 'fa-transgender', 'fa-transgender-alt', 'fa-trash', 'fa-trash-alt', 'fa-tree', 'fa-trophy',
  'fa-truck', 'fa-truck-loading',
  'fa-truck-monster', 'fa-truck-moving', 'fa-truck-pickup', 'fa-tshirt', 'fa-tty', 'fa-tv', 'fa-umbrella', 'fa-umbrella-beach', 'fa-underline', 'fa-undo', 'fa-undo-alt', 'fa-universal-access', 'fa-university', 'fa-unlink', 'fa-unlock',
  'fa-unlock-alt', 'fa-upload',
  'fa-user', 'fa-user-alt', 'fa-user-alt-slash', 'fa-user-astronaut', 'fa-user-check', 'fa-user-circle', 'fa-user-clock', 'fa-user-cog', 'fa-user-edit', 'fa-user-friends', 'fa-user-graduate', 'fa-user-injured', 'fa-user-lock',
  'fa-user-md', 'fa-user-minus',
  'fa-user-ninja', 'fa-user-plus', 'fa-user-secret', 'fa-user-shield', 'fa-user-slash', 'fa-user-tag', 'fa-user-tie', 'fa-user-times', 'fa-users', 'fa-users-cog', 'fa-utensil-spoon', 'fa-utensils', 'fa-vector-square', 'fa-venus',
  'fa-venus-double', 'fa-venus-mars',
  'fa-vial', 'fa-vials', 'fa-video', 'fa-video-slash', 'fa-vihara', 'fa-volleyball-ball', 'fa-volume-down', 'fa-volume-mute', 'fa-volume-off', 'fa-volume-up', 'fa-vote-yea', 'fa-vr-cardboard', 'fa-walking', 'fa-wallet', 'fa-warehouse',
  'fa-water', 'fa-weight',
  'fa-weight-hanging', 'fa-wheelchair', 'fa-wifi', 'fa-wind', 'fa-window-close', 'fa-window-maximize', 'fa-window-minimize', 'fa-window-restore', 'fa-wine-bottle', 'fa-wine-glass', 'fa-wine-glass-alt', 'fa-won-sign', 'fa-wrench',
  'fa-yen-sign', 'fa-yin-yang'
  ];

  for (var i = 0, l = iconlist.length; i < l; i++) {
    $('#icon-wrapper').append(
      '<div class="i-block" data-clipboard-text="fas ' + iconlist[i] + '" data-filter="' + iconlist[i] + '"  data-toggle="tooltip" title="' + iconlist[i] + '">' +
      '<i class="fas ' + iconlist[i] + '"></i>' +
      '</div>');
  }
  $('#icon-wrapper').append('<br><h3 class="m-t-20 text-left">Brand</h3>');
  for (var i = 0, l = iconlistbrand.length; i < l; i++) {
    $('#icon-wrapper').append(
      '<div class="i-block" data-clipboard-text="fab ' + iconlistbrand[i] + '" data-filter="' + iconlistbrand[i] + '"  data-toggle="tooltip" title="' + iconlistbrand[i] + '">' +
      '<i class="fab ' + iconlistbrand[i] + '"></i>' +
      '</div>');
  }
  $(window).on('load', function() {
    var iclp = new ClipboardJS('.i-block');
    iclp.on('success', function(e) {
      $(e.trigger).append("<span class='ic-badge badge badge-success'>copied</span>");
      setTimeout(function() {
        $('.i-block').children('.ic-badge').remove();
      }, 3000);
    });

    iclp.on('error', function(e) {
      $(e.trigger).append("<span class='ic-badge badge badge-danger'>Error</span>");
      setTimeout(function() {
        $('.i-block').children('.ic-badge').remove();
      }, 3000);
    });
    $("#icon-search").on("keyup", function() {
      var g = $(this).val().toLowerCase();
      $(".i-main .i-block").each(function() {
        var t = $(this).attr('data-filter');
        if (t) {
          var s = t.toLowerCase();
        }
        if (s) {
          var n = s.indexOf(g);
          if (n !== -1) {
            $(this).show();
          } else {
            $(this).hide();
          }
        }
      });
    });
  });
</script>

</body>

</html>