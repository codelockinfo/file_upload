<?php
ob_start();
include_once('cls_header.php');
//include_once('../append/session.php');
$common_function = new common_function();
include_once('dashboard_header.php');
?>

<body>
   <div class="main-body-parts">
      <div class="box-width">
         <div class="Polaris-Page  cls-first-process">
            <h1 class="cls-first-progress-title Polaris-Text--root Polaris-Text--heading3xl">Let’s set up the first upload field on your products</h1>
            <div class="higher-box-part">
               <div id="cls-firstbox-progress" style="--pc-grid-columns-sm:3;" class="Polaris-Grid first-progress">
                  <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_2ColumnSm Polaris-Grid-Cell--cell_2ColumnMd Polaris-Grid-Cell--cell_4ColumnLg Polaris-Grid-Cell--cell_4ColumnXl cls-main-square">
                     <div data-tab="1" class="Polaris-LegacyCard cls-box-white active">
                        <div class="Polaris-LegacyCard__Section">
                           <h2>1.</h2>
                           <p class="cls-firstbox-text">Where will your field show?</p>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_2ColumnSm Polaris-Grid-Cell--cell_2ColumnMd Polaris-Grid-Cell--cell_4ColumnLg Polaris-Grid-Cell--cell_4ColumnXl cls-main-square">
                     <div data-tab="2" class="Polaris-LegacyCard cls-box-white">
                        <div class="Polaris-LegacyCard__Section">
                           <h2>2.</h2>
                           <p class="cls-secondbox-text">How will it look?</p>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_2ColumnSm Polaris-Grid-Cell--cell_2ColumnMd Polaris-Grid-Cell--cell_4ColumnLg Polaris-Grid-Cell--cell_4ColumnXl cls-main-square">
                     <div data-tab="3" class="Polaris-LegacyCard cls-box-white">
                        <div class="Polaris-LegacyCard__Section">
                           <h2>3.</h2>
                           <p class="cls-thirdbox-text">How should it behave?</p>
                        </div>
                     </div>
                  </div>
               </div>
               <hr style="border-block-start:var(--p-border-width-1) solid var(--p-color-border)" class="Polaris-Divider cls-pipeline">
            </div>
            <div id="tabs-content">
               <div id="tab-1" class="Polaris-Pages higher-box-part first-run active">
                  <div class="Polaris-LegacyCard ">
                     <div class="Polaris-LegacyCard__Header">
                        <h2 class="Polaris-Text--root Polaris-Text--headingMd">
                           Field name
                        </h2>
                     </div>
                     <div class="Polaris-LegacyCard__Section">
                        <div class="Polaris-FormLayout">
                           <div class="Polaris-FormLayout__Item ">
                              <div class="data-input">
                                 <div class="Polaris-TextField">
                                    <input type="text" value="Uploaded file" class="Polaris-TextField__Input ember-text-field ember-view">
                                    <div class="Polaris-TextField__Backdrop"></div>
                                 </div>
                                 <div class="Polaris-Labelled__HelpText">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--break Polaris-Text--subdued">This is the field name that will typically appear in the customer's cart and in your order listing, to identify the uploaded file.</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-LegacyCard ">
                     <div class="Polaris-LegacyCard__Header">
                        <h2 class="Polaris-Text--root Polaris-Text--headingMd">
                           Which products should the field appear on?
                        </h2>
                     </div>
                     <div class="Polaris-LegacyCard__Section">
                        <div id="product-appear" class="cls-product-appears-part">
                           <div style="height:150px">
                              <fieldset class="Polaris-VerticalStack Polaris-VerticalStack--fieldsetReset" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-400);--pc-block-stack-gap-md:var(--p-space-0)" aria-invalid="false">
                                 <ul class="Polaris-BlockStack Polaris-BlockStack--listReset" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-400);--pc-block-stack-gap-md:var(--p-space-0)">
                                    <li>
                                       <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs:var(--p-space-0)">
                                          <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for=":R2qq6:" style="--pc-choice-fill-xs:100%;--pc-choice-fill-sm:auto">
                                             <span class="Polaris-Choice__Control">
                                                <span class="Polaris-RadioButton">
                                                   <input id=":R2qq6:" name=":Rq6:" type="radio" class="Polaris-RadioButton__Input" checked="" value="none">
                                                   <span class="Polaris-RadioButton__Backdrop">
                                                   </span>
                                                </span>
                                             </span>
                                             <span class="Polaris-Choice__Label">
                                                <span>Show field on <strong>all products</strong></span>
                                             </span>
                                          </label>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs:var(--p-space-0)">
                                          <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for=":R3aq6:" style="--pc-choice-fill-xs:100%;--pc-choice-fill-sm:auto">
                                             <span class="Polaris-Choice__Control">
                                                <span class="Polaris-RadioButton">
                                                   <input id=":R3aq6:" name=":Rq6:" type="radio" class="Polaris-RadioButton__Input" value="minimum_purchase">
                                                   <span class="Polaris-RadioButton__Backdrop">
                                                   </span>
                                                </span>
                                             </span>
                                             <span class="Polaris-Choice__Label">
                                                <span>Show field on products that match <strong>any</strong> of these conditions</span>
                                             </span>
                                          </label>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="Polaris-Bleed" style="--pc-bleed-margin-block-end-xs:var(--p-space-0)">
                                          <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for=":R3qq6:" style="--pc-choice-fill-xs:100%;--pc-choice-fill-sm:auto"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id=":R3qq6:" name=":Rq6:" type="radio" class="Polaris-RadioButton__Input" value="minimum_quantity"><span class="Polaris-RadioButton__Backdrop"></span></span></span>
                                             <span class="Polaris-Choice__Label">
                                                <span>Show field on products that match <strong>all</strong> of these conditions</span>
                                             </span></label>
                                          <div class="Polaris-LegacyCard__Section">
                                             <div class="Polaris-FormLayout">
                                                <div role="group" class="Polaris-FormLayout--condensed">
                                                   <div class="Polaris-FormLayout__Items ">
                                                      <div class="Polaris-FormLayout__Item condition-field">
                                                         <div class="select-box">
                                                            <div class="ember-view">
                                                               <div class="Polaris-Select">
                                                                  <select id="-field" class="Polaris-Select__Input">
                                                                     <option value="product">Product is one of</option>
                                                                     <option value="product_title">Product title</option>
                                                                     <option value="product_handle">Product handle</option>
                                                                     <option value="product_vendor">Product vendor</option>
                                                                     <option value="product_type">Product type</option>
                                                                     <option value="product_tags">Product is tagged</option>
                                                                     <option value="collection">Collection is one of</option>
                                                                     <option value="collection_title">Collection title</option>
                                                                     <option value="collection_handle">Collection handle</option>
                                                                  </select>
                                                                  <div aria-hidden="true" class="Polaris-Select__Content">
                                                                     <span class="Polaris-Select__SelectedOption">Product is one of</span>
                                                                     <span class="Polaris-Select__Icon">
                                                                        <span class="Polaris-Icon">
                                                                           <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                           </span>
                                                                           <svg viewBox="0 0 20 20" focusable="false" aria-hidden="true" class="Polaris-Icon__Svg">
                                                                              <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                              </path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                  </div>
                                                                  <div class="Polaris-Select__Backdrop">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </fieldset>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-LegacyCard">
                     <div class="Polaris-LegacyCard__Section">
                        <div class="Polaris-SettingAction">
                           <div class="Polaris-SettingAction__Setting">
                              Your field will show on
                              <strong>all product variants</strong>, but you can instead choose to
                              target specific variants (e.g. to create add-on pricing for uploads)
                           </div>
                           <div class="Polaris-SettingAction__Action">
                              <div class="Polaris-ButtonGroup">
                                 <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button Polaris-Button--plain Polaris-Button--plainFull"><span class="Polaris-Button__Content"><span>
                                             Edit</span></span></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-PageActions">
                     <div class="Polaris-LegacyStack Polaris-LegacyStack--spacingTight Polaris-LegacyStack--distributionTrailing">
                        <div class="Polaris-LegacyStack__Item"><button type="button" class="Polaris-Button Polaris-Button--primary Polaris-Button--sizeLarge"><span class="Polaris-Button__Content"><span>Next</span></span></button></div>
                     </div>
                  </div>
               </div>
               <div id="tab-2" class="Polaris-Page cls-width-box first-run">
                  <div class="Polaris-Layout">
                     <div class="Polaris-Layout__Section">
                        <div class="Polaris-LegacyCard ">
                           <div class="Polaris-LegacyCard__Section ">
                              <div class="Polaris-FormLayout">
                                 <div class="Polaris-FormLayout__Item ">
                                    <div class="box-area-ft">
                                       <div class="Polaris-Labelled__LabelWrapper">
                                          <div class="Polaris-Label"><label for="uploader-form-label" class="Polaris-Label__Text">Add-to-cart form label</label></div>
                                       </div>
                                       <div class="Polaris-TextField ">
                                          <input type="text" value="Upload an image" class="Polaris-TextField__Input ember-text-field ember-view">
                                          <div class="Polaris-TextField__Backdrop"></div>
                                       </div>
                                       <div class="Polaris-Labelled__HelpText">
                                          <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--break Polaris-Text--subdued">This is the label that will appear on your product page form, above the upload button</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="Polaris-FormLayout__Item ">
                                    <div class="box-area-sc">
                                       <div class="Polaris-Labelled__LabelWrapper">
                                          <div class="Polaris-Label"><label for="uploader-button-text" class="Polaris-Label__Text">Upload button text</label></div>
                                       </div>
                                       <div class="Polaris-TextField ">
                                          <input type="text" value="Choose image" class="Polaris-TextField__Input ember-text-field ember-view">
                                          <div class="Polaris-TextField__Backdrop"></div>
                                       </div>
                                       <div class="Polaris-Labelled__HelpText">
                                          <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--break Polaris-Text--subdued">This is the text that will appear on the button which launches the file upload dialog on your product page</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="Polaris-FormLayout__Item ">
                                    <div class="box-area-td">
                                       <div class="Polaris-Labelled__LabelWrapper">
                                          <div class="Polaris-Label"><label for="uploader-button-uploaded-text" class="Polaris-Label__Text">Upload button text (once image uploaded)</label></div>
                                       </div>
                                       <div class="Polaris-TextField ">
                                          <input type="text" value="Choose image" class="Polaris-TextField__Input ember-text-field ember-view">
                                          <div class="Polaris-TextField__Backdrop"></div>
                                       </div>
                                       <div class="Polaris-Labelled__HelpText">
                                          <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--break Polaris-Text--subdued">This is the text that will appear on the button once file(s) have been uploaded</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="Polaris-LegacyCard ">
                           <div class="Polaris-LegacyCard__Section">
                              <div class="Polaris-FormLayout">
                                 <div role="group">
                                    <div class="Polaris-FormLayout__Items ">
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="type-box">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="uploader-label-font-size" class="Polaris-Label__Text">Label font size</label></div>
                                             </div>
                                             <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                <input id="labelNumber" name="label_font_size" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" min="16" value="16">
                                                <div class="Polaris-TextField__Prefix">px</div>
                                                <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                   <button role="button" class="Polaris-TextField__Segment up" tabindex="-1">
                                                      <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                                                               <path d="M15 12l-5-5-5 5z"></path>
                                                            </svg></span></div>
                                                   </button>
                                                   <button role="button" class="Polaris-TextField__Segment down" tabindex="-1">
                                                      <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                                                               <path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path>
                                                            </svg></span></div>
                                                   </button>
                                                </div>
                                                <div class="Polaris-TextField__Backdrop"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="block-box">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="Polaris-LegacyCard__Section">
                              <div class="Polaris-FormLayout">
                                 <div role="group">
                                    <div class="Polaris-FormLayout__Items ">
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="color-area">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="uploader-button-background-color" class="Polaris-Label__Text">Button background color</label></div>
                                             </div>
                                             <div class="ember-view">
                                                <div style="background-color: #00A3F0;" class="color-picker">
                                                </div>
                                             </div>
                                             
                                          </div>
                                       </div>
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="color-area">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="uploader-button-text-color" class="Polaris-Label__Text">Button text color</label></div>
                                             </div>
                                             <div class="ember-view">
                                                <div style="background-color: #FFFFFF;" class="color-picker">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="group">
                                    <div class="Polaris-FormLayout__Items ">
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="text-area-box">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="uploader-button-padding-top-bottom" class="Polaris-Label__Text">Button padding</label></div>
                                             </div>
                                             <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                <div class="Polaris-TextField__Prefix">Top/bottom:&nbsp;&nbsp;</div>
                                                <input id="button_padding_top" name="button_padding_top" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" min="8" value="8">
                                                <div class="Polaris-TextField__Prefix">px</div>
                                                <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                   <button role="button" class="Polaris-TextField__Segment top" tabindex="-1">
                                                      <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                                                               <path d="M15 12l-5-5-5 5z"></path>
                                                            </svg></span></div>
                                                   </button>
                                                   <button role="button" class="Polaris-TextField__Segment bottom" tabindex="-1">
                                                      <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                                                               <path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path>
                                                            </svg></span></div>
                                                   </button>
                                                </div>
                                                <div class="Polaris-TextField__Backdrop"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="true-spilen">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="uploader-button-padding-left-right" class="Polaris-Label__Text">&nbsp;</label></div>
                                             </div>
                                             <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                <div class="Polaris-TextField__Prefix">Left/right:&nbsp;&nbsp;</div>
                                                <input id="button_padding_left" name="button_padding_left" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" min="16" value="16">
                                                <div class="Polaris-TextField__Prefix">px</div>
                                                <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                   <button role="button" class="Polaris-TextField__Segment right" tabindex="-1">
                                                      <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                                                               <path d="M15 12l-5-5-5 5z"></path>
                                                            </svg></span></div>
                                                   </button>
                                                   <button role="button" class="Polaris-TextField__Segment left" tabindex="-1">
                                                      <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                                                               <path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path>
                                                            </svg></span></div>
                                                   </button>
                                                </div>
                                                <div class="Polaris-TextField__Backdrop"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="group">
                                    <div class="Polaris-FormLayout__Items ">
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="flas-spilen">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="button_font_size" class="Polaris-Label__Text">Button font size</label></div>
                                             </div>
                                             <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                <input id="button_font_size" name="label_font_size" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" min="16" value="16">
                                                <div class="Polaris-TextField__Prefix">px</div>
                                                <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                   <button role="button" class="Polaris-TextField__Segment upper" tabindex="-1">
                                                      <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                                                               <path d="M15 12l-5-5-5 5z"></path>
                                                            </svg></span></div>
                                                   </button>
                                                   <button role="button" class="Polaris-TextField__Segment lower" tabindex="-1">
                                                      <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true">
                                                               <path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path>
                                                            </svg></span></div>
                                                   </button>
                                                </div>
                                                <div class="Polaris-TextField__Backdrop"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="value-type">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="uploader-button-border-radius" class="Polaris-Label__Text">Button rounded corners</label></div>
                                             </div>
                                             <div class="ember-view">
                                                <div style="--Polaris-RangeSlider-min:0 --Polaris-RangeSlider-max:30; --Polaris-RangeSlider-current:3; --Polaris-RangeSlider-progress:10%; --Polaris-RangeSlider-output-factor:0.18;" class="Polaris-RangeSlider">
                                                   <div class="Polaris-RangeSlider__InputWrapper"><input min="0" max="30" type="range" id="uploader-button-border-radius" class="Polaris-RangeSlider__Input ember-text-field ember-view"></div>
                                                </div>
                                             </div>
                                             <div class="Polaris-Labelled__HelpText">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--break Polaris-Text--subdued">Rounded by 3 pixels</span>
                                             </div>
                                          </div>
                                       </div>

                                    </div>
                                 </div>
                                 <div role="group">
                                    <div class="Polaris-FormLayout__Items ">
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="course-area">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="uploader-button-width" class="Polaris-Label__Text">Button width</label></div>
                                             </div>
                                             <div class="ember-view">
                                                <div class="Polaris-Select">
                                                   <select id="uploader-button-width" class="Polaris-Select__Input">
                                                      <option value="false">Auto</option>
                                                      <option value="true">Full width</option>
                                                   </select>
                                                   <div aria-hidden="true" class="Polaris-Select__Content">
                                                      <span class="Polaris-Select__SelectedOption">Auto</span>
                                                      <span class="Polaris-Select__Icon">
                                                         <span class="Polaris-Icon">
                                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                            </span>
                                                            <svg viewBox="0 0 20 20" focusable="false" aria-hidden="true" class="Polaris-Icon__Svg">
                                                               <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                               </path>
                                                            </svg>
                                                         </span>
                                                      </span>
                                                   </div>
                                                   <div class="Polaris-Select__Backdrop">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="Polaris-LegacyCard__Section">
                              <div class="Polaris-FormLayout cls-size-btn">
                                 <div role="group">
                                    <div class="Polaris-FormLayout__Items ">
                                       <div class="Polaris-FormLayout__Item ">
                                          <div class="select-box-type">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label for="uploader-language" class="Polaris-Label__Text">Dialog language</label></div>
                                             </div>
                                             <div class="ember-view">
                                                <div class="Polaris-Select">
                                                   <select id="uploader-language" class="Polaris-Select__Input">
                                                      <option value="ar">Arabic</option>
                                                      <option value="ca">Catalan</option>
                                                      <option value="zh">Chinese (Simplified)</option>
                                                      <option value="zhTW">Chinese (Traditional)</option>
                                                      <option value="cs">Czech</option>
                                                      <option value="da">Danish</option>
                                                      <option value="nl">Dutch</option>
                                                      <option value="en">English</option>
                                                      <option value="fi">Finnish</option>
                                                      <option value="fr">French</option>
                                                      <option value="de">German</option>
                                                      <option value="el">Greek</option>
                                                      <option value="et">Estonian</option>
                                                      <option value="he">Hebrew</option>
                                                      <option value="hu">Hungarian</option>
                                                      <option value="it">Italian</option>
                                                      <option value="id">Indonesian</option>
                                                      <option value="ja">Japanese</option>
                                                      <option value="ko">Korean</option>
                                                      <option value="lv">Latvian</option>
                                                      <option value="lt">Lithuanian</option>
                                                      <option value="nb">Norwegian</option>
                                                      <option value="pl">Polish</option>
                                                      <option value="pt">Portuguese</option>
                                                      <option value="ro">Romanian</option>
                                                      <option value="ru">Russian</option>
                                                      <option value="sk">Slovak</option>
                                                      <option value="si">Slovenian</option>
                                                      <option value="sr">Serbian</option>
                                                      <option value="es">Spanish</option>
                                                      <option value="sv">Swedish</option>
                                                      <option value="tr">Turkish</option>
                                                      <option value="vi">Vietnamese</option>
                                                   </select>
                                                   <div aria-hidden="true" class="Polaris-Select__Content">
                                                      <span class="Polaris-Select__SelectedOption">English</span>
                                                      <span class="Polaris-Select__Icon">
                                                         <span class="Polaris-Icon">
                                                            <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                            </span>
                                                            <svg viewBox="0 0 20 20" focusable="false" aria-hidden="true" class="Polaris-Icon__Svg">
                                                               <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                               </path>
                                                            </svg>
                                                         </span>
                                                      </span>
                                                   </div>
                                                   <div class="Polaris-Select__Backdrop">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="Polaris-LegacyCard__Section cls-use-css">
                              <div class="Polaris-FormLayout">
                                 <div class="Polaris-FormLayout__Item ">
                                    <div class="btn-arae-type">
                                       <button type="button" class="Polaris-Button"><span class="Polaris-Button__Content"><span>Use custom CSS styles</span></span></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="Polaris-LegacyCard__Section cls-css-textarae">
                              <div class="Polaris-FormLayout">
                                 <div class="Polaris-FormLayout__Item ">
                                    <div class="">
                                       <div class="Polaris-Labelled__LabelWrapper">
                                          <div class="Polaris-Label"><label for="uploader-custom-css" class="Polaris-Label__Text">Custom CSS</label></div>
                                       </div>
                                       <div id="ember798" class="ember-view">
                                          <div class="Polaris-TextField Polaris-TextField--multiline">
                                             <textarea rows="4" id="uploader-custom-css" value="hello" class="Polaris-TextField__Input ember-text-area text-area ember-view" style="overflow: hidden; overflow-wrap: break-word; height: 92px; max-height: 450px;"></textarea>
                                             <div class="Polaris-TextField__Backdrop">
                                                <style>
                                                .uploadkit-label {}
                                                .uploadkit-button {}
                                                .uploadkit-thumbnails {}
                                                .uploadkit-thumbnails img {}
                                                </style>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                              </div>

                           </div>
                        </div>
                        <div class="Polaris-PageActions">
                           <div class="Polaris-LegacyStack Polaris-LegacyStack--spacingTight Polaris-LegacyStack--distributionEqualSpacing">
                              <div class="Polaris-LegacyStack__Item">
                                 <div class="Polaris-ButtonGroup">
                                    <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button
                                    Polaris-Button--sizeLarge"><span class="Polaris-Button__Content"><span>Back</span></span></button></div>
                                 </div>
                              </div>
                              <div class="Polaris-LegacyStack__Item"><button type="button" class="Polaris-Button Polaris-Button--primary
                              Polaris-Button--sizeLarge"><span class="Polaris-Button__Content"><span>Next</span></span></button></div>
                           </div>
                        </div>
                     </div>
                     <div data-sticky-container="" class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                        <div id="field-preview" class="Polaris-LegacyCard ">
                           <div class="Polaris-LegacyCard__Header">
                              <h2 class="Polaris-Text--root Polaris-Text--headingMd">
                                 Field preview
                              </h2>
                           </div>
                           <div class="Polaris-LegacyCard__Section">
                              <div class="uploader-preview ember-view">
                                 <label class="uploadkit-label">Upload an image</label>
                                 <div class="uploadkit-thumbnails"></div>
                                 <button class="uploadkit-button">Choose image</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="tab-3" class="Polaris-Page first-run">
                  hello
               </div>
            </div>
         </div>
      </div>
   </div>
</body>