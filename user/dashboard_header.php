<?php
$store = (isset($_GET['store']) && $_GET['store'] != '') ? $_GET['store'] : "managedashboard.myshopify.com";
?>

<body>
    <div class="Polaris-Page__Header Polaris-Page__Header--hasPagination Polaris-Page__Header--hasBreadcrumbs Polaris-Page__Header--hasRollup Polaris-Page__Header--hasSecondaryActions logoheader">
        <div class="Polaris-Page Polaris-Page--fullWidth cls-main-page">
            <div class="Polaris-Page-Header Polaris-Page-Header__Header--hasBreadcrumbs">
                <div class="Polaris-Page-Header__MainContent polaris-nav-menu">
                    <div class="Polaris-Page-Header__TitleAndActions cls_header_css">
                        <div class="polaris-container">
                            <div class="Polaris-Page__Title cls_header_logo_image">
                                <a href="index.php?store=<?php echo $_SESSION['store']; ?>" class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"> <img src="<?php echo CLS_SITE_URL; ?>/assets/images/file_upload.png" alt="your image" class="logoimg" /></a>
                            </div>
                            <div class="polaris-text">
                                <a data-polaris-unstyled="true" class="Polaris-Link cls-header-text" href="#">File Uploads by UploadKit</a>
                            </div>
                        </div>
                        <div class="Polaris-LegacyStack Polaris-LegacyStack--spacingNone Polaris-LegacyStack--alignmentCenter cls-dashboaed">
                            <div class="Polaris-LegacyStack__Item">
                                <div class="_MinHeight60_11jpr_73"></div>
                            </div>
                            <div class="Polaris-LegacyStack__Item Polaris-LegacyStack__Item--fill">
                                <div class="Polaris-Page-Header__BreadcrumbWrapper cls-breadcrumb">
                                    <h1 class="Polaris-Text--root Polaris-Text--headingLg"><span>Dashboard</span></h1>
                                </div>
                            </div>
                            <div class="Polaris-LegacyStack__Item">
                                <a href="" class="Polaris-Button  Polaris-Button--success" style="text-decoration: none;">
                                    <span class="Polaris-Button--variantSecondary">
                                        <span>Help Center </span>
                                    </span>
                                </a>
                                <a href="" class="Polaris-Button" style="text-decoration: none;">
                                    <span class=".Polaris-Button--variantSecondary">
                                        <span>Support Request</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>