<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.extension' shared service.

return $this->services['form.extension'] = new \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension($this, array('Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingNewType' => 'cocorico.form.type.listing_new', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditType' => 'cocorico.form.type.listing_edit', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditStatusType' => 'cocorico.form.type.listing_edit_status', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditDescriptionType' => 'cocorico.form.type.listing_edit_description', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditPriceType' => 'cocorico.form.type.listing_edit_price', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditImagesType' => 'cocorico.form.type.listing_edit_images', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditLocationType' => 'cocorico.form.type.listing_edit_location', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditCharacteristicType' => 'cocorico.form.type.listing_edit_characteristic', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilitiesType' => 'cocorico.form.type.listing_edit_availabilities', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilitiesStatusType' => 'cocorico.form.type.listing_edit_availabilities_status', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilityStatusType' => 'cocorico.form.type.listing_edit_availability_status', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilitiesPricesType' => 'cocorico.form.type.listing_edit_availabilities_prices', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilityPriceType' => 'cocorico.form.type.listing_edit_availability_price', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingNewCategoriesType' => 'cocorico.form.type.listing_new_categories', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditCategoriesType' => 'cocorico.form.type.listing_edit_categories', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditCategoriesAjaxType' => 'cocorico.form.type.listing_edit_categories_ajax', 'Cocorico\\CoreBundle\\Form\\Type\\CountryFilteredType' => 'cocorico.form.type.country_filtered', 'Cocorico\\CoreBundle\\Form\\Type\\LanguageFilteredType' => 'cocorico.form.type.language_filtered', 'Cocorico\\CoreBundle\\Form\\Type\\PriceType' => 'cocorico.form.type.price', 'Cocorico\\CoreBundle\\Form\\Type\\PriceRangeType' => 'cocorico.form.type.price_range', 'Cocorico\\CoreBundle\\Form\\Type\\EntityHiddenType' => 'cocorico.form.type.entity_hidden', 'Cocorico\\CoreBundle\\Form\\Type\\ListingCategoryType' => 'cocorico.form.type.listing_category', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingSearchResultType' => 'cocorico.form.type.listing_search_result', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingSearchType' => 'cocorico.form.type.listing_search', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingSearchHomeType' => 'cocorico.form.type.listing_search_home', 'Cocorico\\CoreBundle\\Form\\Type\\ListingCharacteristicType' => 'cocorico.form.type.listing_characteristic', 'Cocorico\\CoreBundle\\Form\\Type\\ListingListingCharacteristicType' => 'cocorico.form.type.listing_listing_characteristic', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditDurationType' => 'cocorico.form.type.listing_edit_duration', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\BookingNewType' => 'cocorico.form.type.booking_new', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\BookingEditType' => 'cocorico.form.type.booking_edit', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\BookingPriceType' => 'cocorico.form.type.booking_price', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\BookingUserAddressFormType' => 'cocorico.form.type.booking_user_address', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\BookingStatusFilterType' => 'cocorico.form.booking.status_filter', 'Cocorico\\UserBundle\\Form\\Type\\LoginFormType' => 'cocorico_user.form.type.login', 'Cocorico\\UserBundle\\Form\\Type\\RegistrationFormType' => 'cocorico_user.form.type.register', 'Cocorico\\UserBundle\\Form\\Type\\UserAddressFormType' => 'cocorico_user.form.type.user_address', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'Cocorico\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'FOS\\UserBundle\\Form\\Type\\GroupFormType' => 'fos_user.group.form.type', 'Doctrine\\Bundle\\MongoDBBundle\\Form\\Type\\DocumentType' => 'form.type.mongodb_document', 'Sonata\\AdminBundle\\Form\\Type\\AdminType' => 'sonata.admin.form.type.admin', 'Sonata\\AdminBundle\\Form\\Type\\ModelType' => 'sonata.admin.form.type.model_choice', 'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => 'sonata.admin.form.type.model_list', 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => 'sonata.admin.form.type.model_reference', 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => 'sonata.admin.form.type.model_hidden', 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => 'sonata.admin.form.type.model_autocomplete', 'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => 'sonata.admin.form.type.collection', 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => 'sonata.admin.form.filter.type.number', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => 'sonata.admin.form.filter.type.choice', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => 'sonata.admin.form.filter.type.default', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => 'sonata.admin.form.filter.type.date', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => 'sonata.admin.form.filter.type.daterange', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => 'sonata.admin.form.filter.type.datetime', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => 'sonata.admin.form.filter.type.datetime_range', 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => 'sonata.core.form.type.array', 'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => 'sonata.core.form.type.boolean', 'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => 'sonata.core.form.type.collection', 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => 'sonata.core.form.type.translatable_choice', 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => 'sonata.core.form.type.date_range', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => 'sonata.core.form.type.datetime_range', 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => 'sonata.core.form.type.date_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => 'sonata.core.form.type.datetime_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => 'sonata.core.form.type.date_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => 'sonata.core.form.type.datetime_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\EqualType' => 'sonata.core.form.type.equal', 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => 'sonata.core.form.type.color_selector', 'Sonata\\CoreBundle\\Form\\Type\\ColorType' => 'sonata.core.form.type.color', 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => 'sonata.block.form.type.block', 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => 'sonata.block.form.type.container_template', 'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType' => 'sonata.user.form.type.security_roles', 'Sonata\\UserBundle\\Form\\Type\\UserGenderListType' => 'sonata.user.form.gender_list', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType' => 'a2lix_translation_form.default.type.translations', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType' => 'a2lix_translation_form.default.type.translationsFields', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType' => 'a2lix_translation_form.default.type.translationsForms', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType' => 'a2lix_translation_form.default.type.translationsLocalesSelector', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType' => 'a2lix_translation_form.default.type.translatedEntity', 'Liip\\ImagineBundle\\Form\\Type\\ImageType' => 'liip_imagine.form.type.image', 'FOS\\MessageBundle\\FormType\\RecipientsType' => 'fos_message.recipients_selector', 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType' => 'ivory_ck_editor.form.type', 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => 'fm_elfinder.form.type', 'Cocorico\\GeoBundle\\Form\\Type\\GeocodingToCoordinateType' => 'cocorico_geo.form.type.geocoding', 'Cocorico\\UserBundle\\Form\\Type\\ProfileAboutMeFormType' => 'cocorico_user.profile_about_me.form.type', 'Cocorico\\MessageBundle\\Form\\Type\\Frontend\\NewThreadMessageFormType' => 'cocorico_message.new_thread.form.type', 'Cocorico\\MessageBundle\\Form\\Type\\Frontend\\ReplyMessageFormType' => 'cocorico_message.reply.form.type', 'Cocorico\\ContactBundle\\Form\\Type\\Frontend\\ContactNewType' => 'cocorico_contact.form.type.contact_new', 'Cocorico\\ReviewBundle\\Form\\Type\\StarRatingType' => 'cocorico.star_rating.form.type', 'Cocorico\\ReviewBundle\\Form\\Type\\Dashboard\\ReviewType' => 'cocorico.form.type.review_new', 'Cocorico\\TimeBundle\\Form\\Type\\DateRangeType' => 'cocorico_time.form.type.date_range', 'Cocorico\\TimeBundle\\Form\\Type\\DateHiddenType' => 'cocorico_time.form.type.date_hidden', 'Cocorico\\TimeBundle\\Form\\Type\\TimeRangeType' => 'cocorico_time.form.type.time_range', 'Cocorico\\TimeBundle\\Form\\Type\\WeekDaysType' => 'cocorico_time.form.type.weekdays'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => array(0 => 'cocorico.image_type_extension'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'form.type_extension.form.data_collector', 5 => 'sonata.admin.form.extension.field', 6 => 'sonata.admin.form.extension.field.mopa'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => array(0 => 'sonata.admin.form.extension.choice')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine', 2 => 'form.type_guesser.doctrine.mongodb'), array('sonata_type_admin' => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 'sonata_type_model' => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 'sonata_type_model_list' => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 'sonata_type_model_reference' => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 'sonata_type_model_hidden' => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 'sonata_type_model_autocomplete' => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 'sonata_type_native_collection' => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 'sonata_type_choice_field_mask' => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 'sonata_type_filter_number' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 'sonata_type_filter_choice' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 'sonata_type_filter_default' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 'sonata_type_filter_date' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 'sonata_type_filter_date_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 'sonata_type_filter_datetime' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 'sonata_type_filter_datetime_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 'tab' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\TabType', 'form' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'birthday' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType', 'checkbox' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType', 'choice' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'collection' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType', 'country' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType', 'date' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType', 'datetime' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType', 'email' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType', 'file' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'hidden' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType', 'integer' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType', 'language' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType', 'locale' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType', 'money' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType', 'number' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType', 'password' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType', 'percent' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType', 'radio' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType', 'repeated' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType', 'search' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType', 'textarea' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType', 'text' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', 'time' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType', 'timezone' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType', 'url' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType', 'button' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType', 'submit' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType', 'reset' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType', 'currency' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType', 'entity' => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 'sonata_type_immutable_array' => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 'sonata_type_boolean' => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 'sonata_type_collection' => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 'sonata_type_translatable_choice' => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 'sonata_type_date_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 'sonata_type_datetime_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 'sonata_type_date_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 'sonata_type_datetime_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 'sonata_type_date_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 'sonata_type_datetime_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 'sonata_type_equal' => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 'sonata_type_color' => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 'sonata_type_color_selector' => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 'sonata_block_service_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 'sonata_type_container_template_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 'fos_user_username' => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 'fos_user_profile' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 'fos_user_registration' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 'fos_user_change_password' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 'fos_user_resetting' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 'fos_user_group' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType', 'sonata_security_roles' => 'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType', 'sonata_user_profile' => 'Sonata\\UserBundle\\Form\\Type\\ProfileType', 'sonata_user_gender' => 'Sonata\\UserBundle\\Form\\Type\\UserGenderListType', 'sonata_user_registration' => 'Sonata\\UserBundle\\Form\\Type\\RegistrationFormType', 'sonata_user_api_form_group' => 'Sonata\\UserBundle\\Form\\Type\\ApiGroupType', 'sonata_user_api_form_user' => 'Sonata\\UserBundle\\Form\\Type\\ApiUserType'), array('form' => array(0 => 'sonata.admin.form.extension.field', 1 => 'mopa_bootstrap.form.type_extension.help', 2 => 'mopa_bootstrap.form.type_extension.legend', 3 => 'mopa_bootstrap.form.type_extension.error', 4 => 'mopa_bootstrap.form.type_extension.widget', 5 => 'mopa_bootstrap.form.type_extension.horizontal', 6 => 'mopa_bootstrap.form.type_extension.widget_collection', 7 => 'mopa_bootstrap.form.type_extension.tabbed', 8 => 'form.type_extension.form.http_foundation', 9 => 'form.type_extension.form.validator', 10 => 'form.type_extension.csrf', 11 => 'form.type_extension.form.data_collector'), 'choice' => array(0 => 'sonata.admin.form.extension.choice'), 'button' => array(0 => 'mopa_bootstrap.form.type_extension.button'), 'date' => array(0 => 'mopa_bootstrap.form.type_extension.date'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array());