<!--begin::Form-->
<form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="post" id="dt_modal_form"
    enctype="multipart/form-data">
    @csrf
    <!--begin::Modal header-->
    <div class="modal-header custom-modal-header" id="kt_modal_add_customer_header">
        <!--begin::Modal title-->
        <div class="d-flex flex-shrink-0 p-1">
            <p class="main-modal-title"><span class="svg-icon svg-icon-2 me-2"><i
                        class="far fa-plus-circle fs-2"></span></i><span
                    class="text-uppercase fs-3">{{ __('permission::modal.add-title') }}</span></p>
        </div>
        <!--end::Modal title-->
        <!--begin::Actions buttons-->
        <div class="d-flex justify-content-end flex-shrink-0 p-1">
            <a id="dt_modal_fullscreen" href="javascript:;" class="btn btn-icon btn-active-color-primary btn-sm me-1">
                <span class="svg-icon svg-icon-3">
                    <i id="fullscreen-icon" class="fas fa-expand" style="font-size: 20px;"></i>
                </span>
            </a>
            <a id="dt_modal_close" href="javascript:;" class="btn btn-icon btn-active-color-danger btn-sm">
                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                <span class="svg-icon svg-icon-1">
                    <i class="far fa-times" style="font-size: 20px;"></i>
                </span>
                <!--end::Svg Icon-->
            </a>
        </div>
        <!--begin::Actions buttons-->
    </div>
    <!--end::Modal header-->
    <!--begin::Modal body-->
    <div class="modal-body py-10 ajax-modal-body">
        <!--begin::Scroll-->
        <div class="scroll-y me-n7 pe-7 ajax-modal-scroll" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="#kt_modal_add_customer_header"
            data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
            <div id="errors-alert-wrapper" class="alert-wrapper d-none">
                <div class="alert alert-dismissible alert-danger d-flex align-items-center p-5 mb-10">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                fill="black"></path>
                            <path
                                d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <h4 class="mb-1 text-danger">{{ __('permission::modal.form.errors') }}</h4>
                        <ul id="error-messages-list">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="group-container mb-5">
                {{-- <h3 class="form-section-title fw-lighter">{{ __('user::modal.form.login-section') }}</h3> --}}
                <div class="row">
                    <div class="col-md-12">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label required fs-6 mb-2">{{ __('permission::modal.form.name_label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control custom-form-control d-flex align-items-center" value="{{ $role->name }}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="control-label required fs-6 mb-2">{{ __('permission::modal.form.permissions_label') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input id="autocomplete" type="text" name="permissions"
                                class="form-control custom-form-control d-flex align-items-center">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Scroll-->
    </div>
    <!--end::Modal body-->
    <!--begin::Modal footer-->
    <div class="modal-footer flex-center">
        <!--begin::Button-->
        <button type="reset" id="dt_modal_cancel"
            class="btn btn-white me-3">{{ __('user::modal.form.cancel') }}</button>
        <!--end::Button-->
        <!--begin::Button-->
        <!-- Prevent implicit submission of the form -->
        <button type="submit" disabled style="display: none" aria-hidden="true"></button>
        <button type="submit" id="dt_modal_submit" class="btn btn-primary">
            <span class="indicator-label">{{ __('user::modal.form.submit') }}</span>
            <span class="indicator-progress">{{ __('user::modal.form.loading_submit') }}...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <!--end::Button-->
    </div>
    <!--end::Modal footer-->
    <div></div>
</form>
<!--end::Form-->

<!-- messages -->
@javascript($ajax_params)
@javascript(['permissions' => $permissions])
@javascript(['rolePermissions' => $rolePermissions])
<script>
    $(function(){
    var tagify = new Tagify(document.querySelector('#autocomplete'), {
        delimiters: null,
        templates: {
            tag: function (tagData) {
                try {
                    // _ESCAPE_START_
                    return `<tag title='${tagData.value.toLowerCase()}' contenteditable='false' spellcheck="false"
                        class='tagify__tag ${tagData.class ? tagData.class : ""}' ${this.getAttributes(tagData)}>
                            <x title='remove tag' class='tagify__tag__removeBtn'></x>
                            <div class="d-flex align-items-center">
                                <span class='tagify__tag-text'>${tagData.value.toLowerCase()}</span>
                            </div>
                        </tag>`
                    // _ESCAPE_END_
                }
                catch (err) { }
            },

            dropdownItem: function (tagData) {
                try {
                    // _ESCAPE_START_
                    return `<div class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'>
                                <span module-id=${tagData.module.trim().toLowerCase()} action-group-id=${tagData.action_group.trim().toLowerCase()}  >${tagData.value.toLowerCase()} - <span class="text-muted">${tagData.tag_description}</span></span>
                            </div>`;
                    // _ESCAPE_END_
                }
                catch (err) { }
            },
            dropdownItemNoMatch: function(data) {
                return `<div class='${this.settings.classNames.dropdownItem}' tabindex="0" role="option">
                    No suggestion found for: <strong>${data.value}</strong>
                </div>`;
            },
        },
        enforceWhitelist: true,
        whitelist: php_to_js['permissions'],
        dropdown: {
            closeOnSelect: false,
            // fuzzySearch: false, 
            enabled: 0, // suggest tags after a single character input
            classname: 'extra-properties', // custom class for the suggestions dropdown
            appendTarget: document.getElementById('dt_modal'),
            maxItems: 20,
        } // map tags' values to this property name, so this property will be the actual value and not the printed value on the screen
    });
    // initialisation
    tagify.addTags(php_to_js['rolePermissions']);
    tagify.on('dropdown:show dropdown:updated', onDropdownShow);
    tagify.on('dropdown:select', onSelectSuggestion);
    var hideDropDownInstance = tagify.dropdown.hide;
    function onDropdownShow(e) {
        $(tagify.DOM.dropdown).on('click',function(e){
            e.stopPropagation();
        });

        var DOM_Tags = Array.prototype.slice.call( e.detail.tagify.DOM.dropdown.content.children );
        DOM_Tags.map(tag => {
            // creating an action group
            var actionGroupID = $(tag).find('span').attr('action-group-id');
            var moduleID = $(tag).find('span').attr('module-id');

            var actionGroup = document.getElementById(`action-group-${moduleID}-${actionGroupID}`);
            if(!actionGroup){
                actionGroup = getActionGroupTag(actionGroupID);
                $(actionGroup).attr('id', `action-group-${moduleID}-${actionGroupID}`);
                $(actionGroup).attr('action-group', 'true');
                $(actionGroup).attr('data-action-group-id', actionGroupID);
            }
            // creating an action group
            var moduleGroup = document.getElementById('module-' + moduleID);
            if(!moduleGroup){
                moduleGroup = getModuleTag(moduleID);
                $(moduleGroup).attr('id', 'module-' + moduleID);
                $(moduleGroup).attr('module-group', 'true');
                $(moduleGroup).attr('data-module-id', moduleID);
            }
            $(actionGroup).append(tag);
            $(moduleGroup).append(actionGroup);
            $(e.detail.tagify.DOM.dropdown.content).append(moduleGroup);
        });
    }
    var canHideDropdown = true;
    function onSelectSuggestion(e){
        try 
        {
            {
                tagify.dropdown.hide = function(){return};
                canHideDropdown = false;
            }
        } catch (error) {}

        if($(e.detail.elm).attr('action-group') == 'true'){
            var actionGroupID = $(e.detail.elm).attr('data-action-group-id');
            var groupTags = tagify.settings.whitelist.filter(tag => {
                return (tag.action_group.toLowerCase() == actionGroupID && !tagify.isTagDuplicate(tag.value));
            });
            tagify.addTags(groupTags);
            // we clear the search
            $(tagify.DOM.input).html('');
            $(tagify.DOM.input).attr('data-suggest','');
            // render delay to focus
            setTimeout(() => {
                $(tagify.DOM.input).focus();
            }, 10);
        }else if($(e.detail.elm).attr('module-group') == 'true'){
            var moduleID = $(e.detail.elm).attr('data-module-id');
            var groupTags = tagify.settings.whitelist.filter(tag => {
                return (tag.module.toLowerCase() == moduleID && !tagify.isTagDuplicate(tag.value));
            });
            if(tagify.suggestedListItems.length == groupTags.length){
                tagify.dropdown.hide = hideDropDownInstance;
            }
            tagify.addTags(groupTags);
            // we clear the search
            $(tagify.DOM.input).html('');
            $(tagify.DOM.input).attr('data-suggest','');
            // render delay to focus
            setTimeout(() => {
                $(tagify.DOM.input).focus();
            }, 10);
        }
    }




    function getActionGroupTag(actionGroupID) {
        // suggestions items should be based on "dropdownItem" template
        return tagify.parseTemplate(function(tagData){
                return `<div class='${this.settings.classNames.dropdownItem} custom-tagify-group-tag' tabindex="0" role="option">
                    <h5 class="px-5 my-2"><a href="javascript:;">${actionGroupID ? actionGroupID.toLowerCase() : ''}</a></h5>
                </div>`;
        });
    }

    function getModuleTag(moduleID) {
        // suggestions items should be based on "dropdownItem" template
        // suggestions items should be based on "dropdownItem" template
        return tagify.parseTemplate(function(tagData){
                return `<div class='${this.settings.classNames.dropdownItem} custom-tagify-group-tag' tabindex="0" role="option">
                    <h4 class="px-5 my-2"><a href="javascript:;">${moduleID ? moduleID.toUpperCase() : ''}</a></h4>
                </div>`;
        });
    }

    $('#dt_modal').on('click', function(){
        if(!canHideDropdown){
            canHideDropdown = true;
            $(tagify.DOM.dropdown).hide();
            tagify.dropdown.hide = hideDropDownInstance;
        }
    });
});
    
</script>