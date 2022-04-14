<?php
/*

type: layout

name: Contacts 16

position: 16

categories: Contact Us


 */
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'fluid-p-t';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'fluid-p-b';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-contacts-16<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-5 max-width-50 d-flex align-items-center mx-auto px-sm-0 px-lg-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-5">Contact us</h2>
                    </div>
                    
                   
                    <div class="col-12 d-flex flex-row mb-5 cloneable">
                        <div class="icons icon-style-1 safe-element width-4">
                            <i class="mw-micon-Information safe-element"></i>
                        </div>
                        <div class="flex-1 pl-2">
                            <h6 class="mb-05">Do you have any questions</h6>
                            <a href="mailto:info@yourcompany.com" class="cloneable">info@yourcompany.com</a>
                        </div>
                    </div>

                    
                    <div class="col-12 d-flex flex-row mb-5 cloneable">
                        <div class="icons icon-style-1 safe-element width-4">
                            <i class="mw-micon-Old-Telephone safe-element"></i>
                        </div>
                        <div class="flex-1 pl-2">
                            <h6 class="mb-05">Reach Us at:</h6>
                            <a href="tel:359800140100" class="cloneable">(+359) 800-140-100</a>
                        </div>
                    </div>

                    <div class="col-12 d-flex flex-row mb-5 cloneable">
                        <div class="icons icon-style-1 safe-element width-4">
                            <i class="mw-micon-Calendar-4 safe-element"></i>
                        </div>
                        <div class="flex-1 pl-2">
                            <h6 class="mb-05">Working Hours:</h6>
                            <p class="cloneable">Mon-Fri: 8:00-17:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-7 pt-5 pt-lg-0 px-md-5">
                <div class="max-width-50 mx-auto">
                    <module type="contact_form" template="skin-5"/>
                </div>
            </div>
        </div>
    </div>
</section>




