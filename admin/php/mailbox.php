<?php include 'sendemail.php'; ?>
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <!--alert messages start-->
        <?php echo "<br>".$alert; ?>
        <?php
         if(isset($_GET['inbox'])){
             
  if($_GET['inbox']=='delete'){
      ?>
        <div class="alert btn-danger mb-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewbox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-x close"
                    data-dismiss="alert">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <strong>Success!</strong>
            Pesan Berhasil DiHapus!.
        </div>

        <?php
  }  
 } 
?>
        <!--alert messages end-->
        <div class="page-header">
            <nav class="breadcrumb-one" aria-label="breadcrumb">
                <div class="title">
                    <h3>Mailbox</h3>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Apps</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="javascript:void(0);">Mailbox</a>
                    </li>
                </ol>
            </nav>

        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12">

                <div class="row">

                    <div class="col-xl-12  col-md-12">

                        <div class="mail-box-container">
                            <div class="mail-overlay"></div>

                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 text-center mail-btn-container">
                                        <a id="btn-compose-mail" class="btn btn-block" href="javascript:void(0);">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewbox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12 mail-categories-container">

                                        <div class="mail-sidebar-scroll">

                                            <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions active" id="mailInbox">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewbox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-inbox">
                                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                                            <path
                                                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                                        </svg>
                                                        <span class="nav-names">Inbox</span>
                                                        <span class="mail-badge badge"></span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions" id="draft">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewbox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-mail"><path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                                        <span class="nav-names">Draft</span>
                                                        <span class="mail-badge badge"></span></a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="mailbox-inbox" class="accordion mailbox-inbox">

                                <div class="search">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewbox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-menu mail-menu d-lg-none">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                    <input
                                        type="text"
                                        class="form-control input-search"
                                        placeholder="Search Here...">
                                </div>

                                <div class="action-center">
                                    <div class="">
                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" id="inboxAll">
                                                <span class="new-control-indicator"></span><span>Check All</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="">

                                        

                                    </div>
                                </div>

                                <div class="message-box">

                                    <div class="message-box-scroll" id="ct">

                                        <?php
    $query="SELECT * FROM contact ORDER BY id DESC LIMIT 999999"; 
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
                                        <!-- PESAN ATAS -->
                                        <div id="unread-schedular-alert" class="mail-item mailInbox">
                                            <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingThirteen">
                                                <div class="mb-0">
                                                    <div
                                                        class="mail-item-heading personal collapsed"
                                                        data-toggle="collapse"
                                                        role="navigation"
                                                        data-target="#mailCollapseThirteen<?=$data['id']?>"
                                                        aria-expanded="false">
                                                        <div class="mail-item-inner">

                                                            <div class="d-flex">
                                                                <div class="n-chk text-center">
                                                                    <a
                                                                        class="btn btn-danger mb-2 mr-2 rounded-circle"
                                                                        href='php/delete.php?del=<?=$data['id']?>'
                                                                        data-toggle="tooltip"
                                                                        data-placement="top"
                                                                        title=""
                                                                        data-original-title="Delete">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24"
                                                                            height="24"
                                                                            viewbox="0 0 24 24"
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-trash-2">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                        </svg>

                                                                    </a>
                                                                </div>
                                                                <div class="f-head">
                                                                    <div class="avatar avatar-sm">
                                                                        <h5 class="avatar-title rounded-circle"><?=@htmlentities(ucfirst($data['cname']))[0]?></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="<?=@htmlentities($data['cemail'])?>"><?=@htmlentities($data['cname'])?></p>
                                                                    </div>
                                                                    <div class="meta-title-tag">
                                                                        <p
                                                                            class="mail-content-excerpt"
                                                                            data-maildescription='{"ops":[{"insert":"<?=@htmlentities($data['cmessage'])?>\n"}]}'>
                                                                            <span class="mail-title" data-mailtitle="<?=@htmlentities($data['csubject'])?>"><?=@htmlentities($data['csubject'])?>
                                                                                -
                                                                            </span><?=@htmlentities($data['cmessage'])?></p>
                                                                        <div class="tags">
                                                                            <span class="g-dot-primary"></span>
                                                                            <span class="g-dot-warning"></span>
                                                                            <span class="g-dot-success"></span>
                                                                            <span class="g-dot-danger"></span>
                                                                        </div>
                                                                        <p class="meta-time align-self-center"><?=@htmlentities($data['cdate'])?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- AKHIR PESAN -->
                                        <?php
                                                            $count++;
                                                    }
                                                    if($count==0){ ?>
                                        <h5 class="text-center">
                                            Tidak Ada Pesan Masuk</h5>
                                        <?php }
                                                        ?>

                                    </div>
                                </div>

                                <div class="content-box">
                                    <div class="d-flex msg-close">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewbox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-arrow-left close-message">
                                            <line x1="19" y1="12" x2="5" y2="12"></line>
                                            <polyline points="12 19 5 12 12 5"></polyline>
                                        </svg>
                                        <h2 class="mail-title" data-selectedmailtitle=""></h2>
                                    </div>

                                    <?php
    $query="SELECT * FROM contact";
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
                                    <!-- PESAN BAWAH -->
                                    <div
                                        id="mailCollapseThirteen<?=$data['id']?>"
                                        class="collapse"
                                        aria-labelledby="mailHeadingThirteen"
                                        data-parent="#mailbox-inbox">
                                        <div
                                            class="mail-content-container mailInbox"
                                            data-mailto="<?=@htmlentities($data['cemail'])?>"
                                            data-mailcc="">

                                            <div class="d-flex justify-content-between mb-5">
                                                <div class="d-flex user-info">
                                                    <div class="avatar avatar-sm">
                                                        <h5 class="avatar-title rounded-circle"><?=@htmlentities(ucfirst($data['cname']))[0]?></h5>
                                                    </div>
                                                    <div class="f-body">
                                                        <div class="meta-title-tag">
                                                            <h4
                                                                class="mail-usr-name"
                                                                data-mailtitle="<?=@htmlentities($data['csubject'])?>"><?=@htmlentities($data['cname'])?></h4>
                                                        </div>
                                                        <div class="meta-mail-time">
                                                            <p class="user-email" data-mailto="<?=@htmlentities($data['cemail'])?>"><?=@htmlentities($data['cemail'])?></p>
                                                            <p class="mail-content-meta-date">
                                                                |
                                                                <?=@htmlentities($data['ctime'])?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-btns">
                                                    <a
                                                        href="javascript:void(0);"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        data-original-title="Reply">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewbox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-corner-up-left reply">
                                                            <polyline points="9 14 4 9 9 4"></polyline>
                                                            <path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>
                                                        </svg>
                                                    </a>
                                                    <a
                                                        href="javascript:void(0);"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        data-original-title="Forward">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewbox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-corner-up-right forward">
                                                            <polyline points="15 14 20 9 15 4"></polyline>
                                                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>

                                            <p
                                                class="mail-content"
                                                data-mailtitle="<?=@htmlentities($data['csubject'])?>"
                                                data-maildescription='{"ops":[{"insert":"<?=@htmlentities($data['cmessage'])?>\n"}]}'>
                                                <?=@htmlentities($data['cmessage'])?>
                                            </p>

                                            <p></p>


                                        </div>
                                    </div>
                                    <!-- AKHIR PESAN -->
                                    <?php
                                                    $count++;
                                            }
                                            if($count==0){ ?>
                                    <h5 class="text-center">
                                        Tidak Ada Pesan Masuk</h5>
                                    <?php }
                                                ?>

                                </div>

                            </div>

                        </div>

                        <?php
    $query="SELECT * FROM smtp_setup"; 
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
                        <!-- Modal -->
                        <div
                            class="modal fade"
                            id="composeMailModal"
                            tabindex="-1"
                            role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewbox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-x close"
                                            data-dismiss="modal">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                        <div class="compose-box">
                                            <div class="compose-content">
                                                <form action="" method="post">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="d-flex mb-4 mail-form">
                                                                <p>From:</p>
                                                                <select class="" id="m-form">
                                                                    <option value="<?=$data['usermail']?>">Help &lt;<?=$data['usermail']?>&gt;</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="d-flex mb-4 mail-to">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewbox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-user">
                                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                                    <circle cx="12" cy="7" r="4"></circle>
                                                                </svg>
                                                                <div class="">
                                                                    <input
                                                                        type="email"
                                                                        name="email"
                                                                        id="m-to"
                                                                        placeholder="To"
                                                                        class="form-control">
                                                                    <span class="validation-text"></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="d-flex mb-4 mail-cc">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewbox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-list">
                                                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                                                    <line x1="3" y1="6" x2="3" y2="6"></line>
                                                                    <line x1="3" y1="12" x2="3" y2="12"></line>
                                                                    <line x1="3" y1="18" x2="3" y2="18"></line>
                                                                </svg>
                                                                <div>
                                                                    <input
                                                                        type="text"
                                                                        id="m-cc"
                                                                        name="name"
                                                                        placeholder="Your Name"
                                                                        class="form-control">
                                                                    <span class="validation-text"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-4 mail-subject">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewbox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-mail">
                                                            <path
                                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                            <polyline points="22,6 12,13 2,6"></polyline>
                                                        </svg>
                                                        <div class="w-100">
                                                            <input
                                                                type="text"
                                                                id="m-subject"
                                                                name="subject"
                                                                placeholder="Subject"
                                                                class="form-control">
                                                            <span class="validation-text"></span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <input
                                                            type="file"
                                                            class="form-control-file"
                                                            id="mail_File_attachment"
                                                            multiple="multiple">
                                                    </div>
                                                    <textarea
                                                        name="message"
                                                        class="form-control"
                                                        id="editor-container"
                                                        rows="4"
                                                        placeholder="Message"></textarea>

                                                    <div class="modal-footer">
                                                        <input class="btn btn-primary" type="submit" name="submit" value="Send Message">

                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ENDS -->
                        <?php }
                                                ?>

                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2020
                <a target="_blank" href="https://romaa.uno">AJTech</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewbox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
            </p>
        </div>
    </div>
</div>