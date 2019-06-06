<?php

namespace ContainerEy4d92t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $dir = $this->targetDirs[0] = dirname(__DIR__);
        for ($i = 1; $i <= 2; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'a2lix_translation_form.default.listener.translationsforms' => 'a2lix_translation_form.default.listener.translationsForms',
            'a2lix_translation_form.default.type.translatedentity' => 'a2lix_translation_form.default.type.translatedEntity',
            'a2lix_translation_form.default.type.translationsfields' => 'a2lix_translation_form.default.type.translationsFields',
            'a2lix_translation_form.default.type.translationsforms' => 'a2lix_translation_form.default.type.translationsForms',
            'a2lix_translation_form.default.type.translationslocalesselector' => 'a2lix_translation_form.default.type.translationsLocalesSelector',
            'doctrine\\bundle\\mongodbbundle\\command\\clearmetadatacachedoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\createschemadoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\dropschemadoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\generatedocumentsdoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateDocumentsDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\generatehydratorsdoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\generateproxiesdoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\infodoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\loaddatafixturesdoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\querydoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\sharddoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\tailcursordoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand',
            'doctrine\\bundle\\mongodbbundle\\command\\updateschemadoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand',
            'geocoder\\dumper\\geoarray' => 'Geocoder\\Dumper\\GeoArray',
            'geocoder\\dumper\\geojson' => 'Geocoder\\Dumper\\GeoJson',
            'geocoder\\dumper\\gpx' => 'Geocoder\\Dumper\\Gpx',
            'geocoder\\dumper\\kml' => 'Geocoder\\Dumper\\Kml',
            'geocoder\\dumper\\wkb' => 'Geocoder\\Dumper\\Wkb',
            'geocoder\\dumper\\wkt' => 'Geocoder\\Dumper\\Wkt',
            'geocoder\\provideraggregator' => 'Geocoder\\ProviderAggregator',
            'sonata\\adminbundle\\command\\createclasscachecommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
            'sonata\\adminbundle\\command\\explainadmincommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
            'sonata\\adminbundle\\command\\generateadmincommand' => 'Sonata\\AdminBundle\\Command\\GenerateAdminCommand',
            'sonata\\adminbundle\\command\\generateobjectaclcommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
            'sonata\\adminbundle\\command\\listadmincommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
            'sonata\\adminbundle\\command\\setupaclcommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
            'sonata\\blockbundle\\command\\debugblockscommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
            'sonata\\corebundle\\command\\sonatadumpdoctrinemetacommand' => 'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
            'sonata\\corebundle\\command\\sonatalistformmappingcommand' => 'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        );
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_metadata_factory' => 'getArgumentMetadataFactoryService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'bazinga_geocoder.provider.google_maps.profiler' => 'getBazingaGeocoder_Provider_GoogleMaps_ProfilerService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'cocorico.booking_user_address_entity_listener' => 'getCocorico_BookingUserAddressEntityListenerService',
            'cocorico.listing_availability_param_converter' => 'getCocorico_ListingAvailabilityParamConverterService',
            'cocorico.listing_param_converter' => 'getCocorico_ListingParamConverterService',
            'cocorico.review.listener' => 'getCocorico_Review_ListenerService',
            'cocorico.star_rating.twig.extension' => 'getCocorico_StarRating_Twig_ExtensionService',
            'cocorico.twig.core_extension' => 'getCocorico_Twig_CoreExtensionService',
            'cocorico.twig.country_extension' => 'getCocorico_Twig_CountryExtensionService',
            'cocorico.twig.extra_bundle_extension' => 'getCocorico_Twig_ExtraBundleExtensionService',
            'cocorico.twig.language_extension' => 'getCocorico_Twig_LanguageExtensionService',
            'cocorico_geo.twig.cocorico_geo_extension' => 'getCocoricoGeo_Twig_CocoricoGeoExtensionService',
            'cocorico_time.twig.intl_extension' => 'getCocoricoTime_Twig_IntlExtensionService',
            'cocorico_time.twig.time_extension' => 'getCocoricoTime_Twig_TimeExtensionService',
            'cocorico_user.user_entity_listener' => 'getCocoricoUser_UserEntityListenerService',
            'cocorico_user.user_request.listener' => 'getCocoricoUser_UserRequest_ListenerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.delegate' => 'getDoctrine_Orm_DefaultEntityManager_DelegateService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_mongodb' => 'getDoctrineMongodbService',
            'doctrine_mongodb.odm.data_collector.pretty' => 'getDoctrineMongodb_Odm_DataCollector_PrettyService',
            'doctrine_mongodb.odm.default_configuration' => 'getDoctrineMongodb_Odm_DefaultConfigurationService',
            'doctrine_mongodb.odm.default_connection' => 'getDoctrineMongodb_Odm_DefaultConnectionService',
            'doctrine_mongodb.odm.default_document_manager' => 'getDoctrineMongodb_Odm_DefaultDocumentManagerService',
            'doctrine_mongodb.odm.default_manager_configurator' => 'getDoctrineMongodb_Odm_DefaultManagerConfiguratorService',
            'doctrine_mongodb.odm.event_manager' => 'getDoctrineMongodb_Odm_EventManagerService',
            'doctrine_odm.mongodb.validator_initializer' => 'getDoctrineOdm_Mongodb_ValidatorInitializerService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'fos_message.authorizer' => 'getFosMessage_AuthorizerService',
            'fos_message.message_manager' => 'getFosMessage_MessageManagerService',
            'fos_message.participant_provider' => 'getFosMessage_ParticipantProviderService',
            'fos_message.provider' => 'getFosMessage_ProviderService',
            'fos_message.thread_manager' => 'getFosMessage_ThreadManagerService',
            'fos_message.thread_reader' => 'getFosMessage_ThreadReaderService',
            'fos_message.twig_extension' => 'getFosMessage_TwigExtensionService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fragment.listener' => 'getFragment_ListenerService',
            'framework_extra_bundle.argument_name_convertor' => 'getFrameworkExtraBundle_ArgumentNameConvertorService',
            'framework_extra_bundle.event.is_granted' => 'getFrameworkExtraBundle_Event_IsGrantedService',
            'http_kernel' => 'getHttpKernelService',
            'hwi_oauth.resource_ownermap.main' => 'getHwiOauth_ResourceOwnermap_MainService',
            'hwi_oauth.security.oauth_utils' => 'getHwiOauth_Security_OauthUtilsService',
            'hwi_oauth.templating.helper.oauth' => 'getHwiOauth_Templating_Helper_OauthService',
            'ivory_ck_editor.renderer' => 'getIvoryCkEditor_RendererService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'jms_di_extra.controller_resolver' => 'getJmsDiExtra_ControllerResolverService',
            'jms_i18n_routing.cookie_setting_listener' => 'getJmsI18nRouting_CookieSettingListenerService',
            'jms_i18n_routing.locale_resolver.default' => 'getJmsI18nRouting_LocaleResolver_DefaultService',
            'jms_translation.twig_extension' => 'getJmsTranslation_TwigExtensionService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'lexik_currency.currency_extension' => 'getLexikCurrency_CurrencyExtensionService',
            'lexik_currency.formatter' => 'getLexikCurrency_FormatterService',
            'lexik_currency.subscriber.locale' => 'getLexikCurrency_Subscriber_LocaleService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'oneup_uploader.templating.uploader_helper' => 'getOneupUploader_Templating_UploaderHelperService',
            'oneup_uploader.twig.extension.uploader' => 'getOneupUploader_Twig_Extension_UploaderService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_locator.sr6ctxe' => 'getServiceLocator_Sr6ctxeService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session_listener' => 'getSessionListenerService',
            'simplethings_entityaudit.config' => 'getSimplethingsEntityaudit_ConfigService',
            'simplethings_entityaudit.create_schema_listener' => 'getSimplethingsEntityaudit_CreateSchemaListenerService',
            'simplethings_entityaudit.log_revisions_listener' => 'getSimplethingsEntityaudit_LogRevisionsListenerService',
            'simplethings_entityaudit.manager' => 'getSimplethingsEntityaudit_ManagerService',
            'simplethings_entityaudit.username_callable.token_storage' => 'getSimplethingsEntityaudit_UsernameCallable_TokenStorageService',
            'sonata.admin.booking' => 'getSonata_Admin_BookingService',
            'sonata.admin.booking_bank_wire' => 'getSonata_Admin_BookingBankWireService',
            'sonata.admin.booking_payin_refund' => 'getSonata_Admin_BookingPayinRefundService',
            'sonata.admin.booking_user_address' => 'getSonata_Admin_BookingUserAddressService',
            'sonata.admin.contact' => 'getSonata_Admin_ContactService',
            'sonata.admin.footer' => 'getSonata_Admin_FooterService',
            'sonata.admin.listing' => 'getSonata_Admin_ListingService',
            'sonata.admin.listing_category' => 'getSonata_Admin_ListingCategoryService',
            'sonata.admin.listing_characteristic' => 'getSonata_Admin_ListingCharacteristicService',
            'sonata.admin.listing_characteristic_group' => 'getSonata_Admin_ListingCharacteristicGroupService',
            'sonata.admin.listing_characteristic_type' => 'getSonata_Admin_ListingCharacteristicTypeService',
            'sonata.admin.listing_characteristic_value' => 'getSonata_Admin_ListingCharacteristicValueService',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService',
            'sonata.admin.message' => 'getSonata_Admin_MessageService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.page' => 'getSonata_Admin_PageService',
            'sonata.admin.parameter' => 'getSonata_Admin_ParameterService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.review' => 'getSonata_Admin_ReviewService',
            'sonata.admin.thread' => 'getSonata_Admin_ThreadService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.admin.user_address' => 'getSonata_Admin_UserAddressService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.twig.global' => 'getSonata_User_Twig_GlobalService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.extension.fm_elfinder_init' => 'getTwig_Extension_FmElfinderInitService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.text_extension' => 'getTwig_TextExtensionService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'white_october_breadcrumbs.twig' => 'getWhiteOctoberBreadcrumbs_TwigService',
        );
        $this->fileMap = array(
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand' => __DIR__.'/getClearMetadataCacheDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand' => __DIR__.'/getCreateSchemaDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand' => __DIR__.'/getDropSchemaDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateDocumentsDoctrineODMCommand' => __DIR__.'/getGenerateDocumentsDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand' => __DIR__.'/getGenerateHydratorsDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand' => __DIR__.'/getGenerateProxiesDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand' => __DIR__.'/getInfoDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand' => __DIR__.'/getLoadDataFixturesDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand' => __DIR__.'/getQueryDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand' => __DIR__.'/getShardDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand' => __DIR__.'/getTailCursorDoctrineODMCommandService.php',
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand' => __DIR__.'/getUpdateSchemaDoctrineODMCommandService.php',
            'Geocoder\\Dumper\\GeoArray' => __DIR__.'/getGeoArrayService.php',
            'Geocoder\\Dumper\\GeoJson' => __DIR__.'/getGeoJsonService.php',
            'Geocoder\\Dumper\\Gpx' => __DIR__.'/getGpxService.php',
            'Geocoder\\Dumper\\Kml' => __DIR__.'/getKmlService.php',
            'Geocoder\\Dumper\\Wkb' => __DIR__.'/getWkbService.php',
            'Geocoder\\Dumper\\Wkt' => __DIR__.'/getWktService.php',
            'Geocoder\\ProviderAggregator' => __DIR__.'/getProviderAggregatorService.php',
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => __DIR__.'/getCreateClassCacheCommandService.php',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => __DIR__.'/getExplainAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateAdminCommand' => __DIR__.'/getGenerateAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => __DIR__.'/getGenerateObjectAclCommandService.php',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => __DIR__.'/getListAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => __DIR__.'/getSetupAclCommandService.php',
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => __DIR__.'/getDebugBlocksCommandService.php',
            'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => __DIR__.'/getSonataDumpDoctrineMetaCommandService.php',
            'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => __DIR__.'/getSonataListFormMappingCommandService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => __DIR__.'/getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => __DIR__.'/getTemplateControllerService.php',
            'a2lix_translation_form.default.listener.translations' => __DIR__.'/getA2lixTranslationForm_Default_Listener_TranslationsService.php',
            'a2lix_translation_form.default.listener.translationsForms' => __DIR__.'/getA2lixTranslationForm_Default_Listener_TranslationsFormsService.php',
            'a2lix_translation_form.default.service.parameter_locale_provider' => __DIR__.'/getA2lixTranslationForm_Default_Service_ParameterLocaleProviderService.php',
            'a2lix_translation_form.default.service.translation' => __DIR__.'/getA2lixTranslationForm_Default_Service_TranslationService.php',
            'a2lix_translation_form.default.type.translatedEntity' => __DIR__.'/getA2lixTranslationForm_Default_Type_TranslatedEntityService.php',
            'a2lix_translation_form.default.type.translations' => __DIR__.'/getA2lixTranslationForm_Default_Type_TranslationsService.php',
            'a2lix_translation_form.default.type.translationsFields' => __DIR__.'/getA2lixTranslationForm_Default_Type_TranslationsFieldsService.php',
            'a2lix_translation_form.default.type.translationsForms' => __DIR__.'/getA2lixTranslationForm_Default_Type_TranslationsFormsService.php',
            'a2lix_translation_form.default.type.translationsLocalesSelector' => __DIR__.'/getA2lixTranslationForm_Default_Type_TranslationsLocalesSelectorService.php',
            'annotations.cache_warmer' => __DIR__.'/getAnnotations_CacheWarmerService.php',
            'argument_resolver.default' => __DIR__.'/getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => __DIR__.'/getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => __DIR__.'/getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => __DIR__.'/getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => __DIR__.'/getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => __DIR__.'/getArgumentResolver_VariadicService.php',
            'assetic.asset_manager' => __DIR__.'/getAssetic_AssetManagerService.php',
            'assetic.asset_manager_cache_warmer' => __DIR__.'/getAssetic_AssetManagerCacheWarmerService.php',
            'assetic.filter.cssrewrite' => __DIR__.'/getAssetic_Filter_CssrewriteService.php',
            'assetic.filter.jsqueeze' => __DIR__.'/getAssetic_Filter_JsqueezeService.php',
            'assetic.filter.minifycsscompressor' => __DIR__.'/getAssetic_Filter_MinifycsscompressorService.php',
            'assetic.filter_manager' => __DIR__.'/getAssetic_FilterManagerService.php',
            'bazinga_geocoder.provider.google_maps' => __DIR__.'/getBazingaGeocoder_Provider_GoogleMapsService.php',
            'cache.default_clearer' => __DIR__.'/getCache_DefaultClearerService.php',
            'cache.global_clearer' => __DIR__.'/getCache_GlobalClearerService.php',
            'cache.system_clearer' => __DIR__.'/getCache_SystemClearerService.php',
            'cache_clearer' => __DIR__.'/getCacheClearerService.php',
            'cache_warmer' => __DIR__.'/getCacheWarmerService.php',
            'cocorico.ajax.authentication_listener' => __DIR__.'/getCocorico_Ajax_AuthenticationListenerService.php',
            'cocorico.authentication_success_listener' => __DIR__.'/getCocorico_AuthenticationSuccessListenerService.php',
            'cocorico.booking.manager' => __DIR__.'/getCocorico_Booking_ManagerService.php',
            'cocorico.booking.subscriber' => __DIR__.'/getCocorico_Booking_SubscriberService.php',
            'cocorico.booking_bank_wire.manager' => __DIR__.'/getCocorico_BookingBankWire_ManagerService.php',
            'cocorico.booking_bank_wire.subscriber' => __DIR__.'/getCocorico_BookingBankWire_SubscriberService.php',
            'cocorico.booking_payin_refund.manager' => __DIR__.'/getCocorico_BookingPayinRefund_ManagerService.php',
            'cocorico.booking_payin_refund.subscriber' => __DIR__.'/getCocorico_BookingPayinRefund_SubscriberService.php',
            'cocorico.booking_validate.subscriber' => __DIR__.'/getCocorico_BookingValidate_SubscriberService.php',
            'cocorico.booking_validator' => __DIR__.'/getCocorico_BookingValidatorService.php',
            'cocorico.breadcrumbs_loader' => __DIR__.'/getCocorico_BreadcrumbsLoaderService.php',
            'cocorico.breadcrumbs_manager' => __DIR__.'/getCocorico_BreadcrumbsManagerService.php',
            'cocorico.breadcrumbs_yaml_locator' => __DIR__.'/getCocorico_BreadcrumbsYamlLocatorService.php',
            'cocorico.breadcrumbs_yaml_parser' => __DIR__.'/getCocorico_BreadcrumbsYamlParserService.php',
            'cocorico.extra_bundle.routing_loader' => __DIR__.'/getCocorico_ExtraBundle_RoutingLoaderService.php',
            'cocorico.form.booking.status_filter' => __DIR__.'/getCocorico_Form_Booking_StatusFilterService.php',
            'cocorico.form.handler.booking' => __DIR__.'/getCocorico_Form_Handler_BookingService.php',
            'cocorico.form.handler.booking.asker.dashboard' => __DIR__.'/getCocorico_Form_Handler_Booking_Asker_DashboardService.php',
            'cocorico.form.handler.booking.offerer.dashboard' => __DIR__.'/getCocorico_Form_Handler_Booking_Offerer_DashboardService.php',
            'cocorico.form.handler.booking_price' => __DIR__.'/getCocorico_Form_Handler_BookingPriceService.php',
            'cocorico.form.handler.listing' => __DIR__.'/getCocorico_Form_Handler_ListingService.php',
            'cocorico.form.handler.listing_availability.price.dashboard' => __DIR__.'/getCocorico_Form_Handler_ListingAvailability_Price_DashboardService.php',
            'cocorico.form.handler.listing_availability.status.dashboard' => __DIR__.'/getCocorico_Form_Handler_ListingAvailability_Status_DashboardService.php',
            'cocorico.form.handler.review' => __DIR__.'/getCocorico_Form_Handler_ReviewService.php',
            'cocorico.form.type.booking_edit' => __DIR__.'/getCocorico_Form_Type_BookingEditService.php',
            'cocorico.form.type.booking_new' => __DIR__.'/getCocorico_Form_Type_BookingNewService.php',
            'cocorico.form.type.booking_price' => __DIR__.'/getCocorico_Form_Type_BookingPriceService.php',
            'cocorico.form.type.booking_user_address' => __DIR__.'/getCocorico_Form_Type_BookingUserAddressService.php',
            'cocorico.form.type.country_filtered' => __DIR__.'/getCocorico_Form_Type_CountryFilteredService.php',
            'cocorico.form.type.entity_hidden' => __DIR__.'/getCocorico_Form_Type_EntityHiddenService.php',
            'cocorico.form.type.language_filtered' => __DIR__.'/getCocorico_Form_Type_LanguageFilteredService.php',
            'cocorico.form.type.listing_category' => __DIR__.'/getCocorico_Form_Type_ListingCategoryService.php',
            'cocorico.form.type.listing_characteristic' => __DIR__.'/getCocorico_Form_Type_ListingCharacteristicService.php',
            'cocorico.form.type.listing_edit' => __DIR__.'/getCocorico_Form_Type_ListingEditService.php',
            'cocorico.form.type.listing_edit_availabilities' => __DIR__.'/getCocorico_Form_Type_ListingEditAvailabilitiesService.php',
            'cocorico.form.type.listing_edit_availabilities_prices' => __DIR__.'/getCocorico_Form_Type_ListingEditAvailabilitiesPricesService.php',
            'cocorico.form.type.listing_edit_availabilities_status' => __DIR__.'/getCocorico_Form_Type_ListingEditAvailabilitiesStatusService.php',
            'cocorico.form.type.listing_edit_availability_price' => __DIR__.'/getCocorico_Form_Type_ListingEditAvailabilityPriceService.php',
            'cocorico.form.type.listing_edit_availability_status' => __DIR__.'/getCocorico_Form_Type_ListingEditAvailabilityStatusService.php',
            'cocorico.form.type.listing_edit_categories' => __DIR__.'/getCocorico_Form_Type_ListingEditCategoriesService.php',
            'cocorico.form.type.listing_edit_categories_ajax' => __DIR__.'/getCocorico_Form_Type_ListingEditCategoriesAjaxService.php',
            'cocorico.form.type.listing_edit_characteristic' => __DIR__.'/getCocorico_Form_Type_ListingEditCharacteristicService.php',
            'cocorico.form.type.listing_edit_description' => __DIR__.'/getCocorico_Form_Type_ListingEditDescriptionService.php',
            'cocorico.form.type.listing_edit_duration' => __DIR__.'/getCocorico_Form_Type_ListingEditDurationService.php',
            'cocorico.form.type.listing_edit_images' => __DIR__.'/getCocorico_Form_Type_ListingEditImagesService.php',
            'cocorico.form.type.listing_edit_location' => __DIR__.'/getCocorico_Form_Type_ListingEditLocationService.php',
            'cocorico.form.type.listing_edit_price' => __DIR__.'/getCocorico_Form_Type_ListingEditPriceService.php',
            'cocorico.form.type.listing_edit_status' => __DIR__.'/getCocorico_Form_Type_ListingEditStatusService.php',
            'cocorico.form.type.listing_listing_characteristic' => __DIR__.'/getCocorico_Form_Type_ListingListingCharacteristicService.php',
            'cocorico.form.type.listing_new' => __DIR__.'/getCocorico_Form_Type_ListingNewService.php',
            'cocorico.form.type.listing_new_categories' => __DIR__.'/getCocorico_Form_Type_ListingNewCategoriesService.php',
            'cocorico.form.type.listing_search' => __DIR__.'/getCocorico_Form_Type_ListingSearchService.php',
            'cocorico.form.type.listing_search_home' => __DIR__.'/getCocorico_Form_Type_ListingSearchHomeService.php',
            'cocorico.form.type.listing_search_result' => __DIR__.'/getCocorico_Form_Type_ListingSearchResultService.php',
            'cocorico.form.type.price' => __DIR__.'/getCocorico_Form_Type_PriceService.php',
            'cocorico.form.type.price_range' => __DIR__.'/getCocorico_Form_Type_PriceRangeService.php',
            'cocorico.form.type.review_new' => __DIR__.'/getCocorico_Form_Type_ReviewNewService.php',
            'cocorico.helper.global' => __DIR__.'/getCocorico_Helper_GlobalService.php',
            'cocorico.image_type_extension' => __DIR__.'/getCocorico_ImageTypeExtensionService.php',
            'cocorico.language.manager' => __DIR__.'/getCocorico_Language_ManagerService.php',
            'cocorico.listing.manager' => __DIR__.'/getCocorico_Listing_ManagerService.php',
            'cocorico.listing_availabilities_price_validator' => __DIR__.'/getCocorico_ListingAvailabilitiesPriceValidatorService.php',
            'cocorico.listing_availability.manager' => __DIR__.'/getCocorico_ListingAvailability_ManagerService.php',
            'cocorico.listing_availability_time.manager' => __DIR__.'/getCocorico_ListingAvailabilityTime_ManagerService.php',
            'cocorico.listing_availability_validator' => __DIR__.'/getCocorico_ListingAvailabilityValidatorService.php',
            'cocorico.listing_discount_validator' => __DIR__.'/getCocorico_ListingDiscountValidatorService.php',
            'cocorico.listing_image_upload_listener' => __DIR__.'/getCocorico_ListingImageUploadListenerService.php',
            'cocorico.listing_image_upload_validation_listener' => __DIR__.'/getCocorico_ListingImageUploadValidationListenerService.php',
            'cocorico.listing_search.manager' => __DIR__.'/getCocorico_ListingSearch_ManagerService.php',
            'cocorico.listing_search_request' => __DIR__.'/getCocorico_ListingSearchRequestService.php',
            'cocorico.listing_validator' => __DIR__.'/getCocorico_ListingValidatorService.php',
            'cocorico.mailer.twig_swift' => __DIR__.'/getCocorico_Mailer_TwigSwiftService.php',
            'cocorico.namer.image_namer' => __DIR__.'/getCocorico_Namer_ImageNamerService.php',
            'cocorico.review.manager' => __DIR__.'/getCocorico_Review_ManagerService.php',
            'cocorico.star_rating.form.type' => __DIR__.'/getCocorico_StarRating_Form_TypeService.php',
            'cocorico.times_range_overlap_validator' => __DIR__.'/getCocorico_TimesRangeOverlapValidatorService.php',
            'cocorico.translator.admin.extractor' => __DIR__.'/getCocorico_Translator_Admin_ExtractorService.php',
            'cocorico.translator.breadcrumbs_extractor' => __DIR__.'/getCocorico_Translator_BreadcrumbsExtractorService.php',
            'cocorico.translator.entity.extractor' => __DIR__.'/getCocorico_Translator_Entity_ExtractorService.php',
            'cocorico.translator.manager' => __DIR__.'/getCocorico_Translator_ManagerService.php',
            'cocorico_cms.footer.manager' => __DIR__.'/getCocoricoCms_Footer_ManagerService.php',
            'cocorico_contact.contact.manager' => __DIR__.'/getCocoricoContact_Contact_ManagerService.php',
            'cocorico_contact.form.handler.contact' => __DIR__.'/getCocoricoContact_Form_Handler_ContactService.php',
            'cocorico_contact.form.type.contact_new' => __DIR__.'/getCocoricoContact_Form_Type_ContactNewService.php',
            'cocorico_contact.mailer.twig_swift' => __DIR__.'/getCocoricoContact_Mailer_TwigSwiftService.php',
            'cocorico_geo.form.type.geocoding' => __DIR__.'/getCocoricoGeo_Form_Type_GeocodingService.php',
            'cocorico_geo.geocoding.manager' => __DIR__.'/getCocoricoGeo_Geocoding_ManagerService.php',
            'cocorico_message.booking.subscriber' => __DIR__.'/getCocoricoMessage_Booking_SubscriberService.php',
            'cocorico_message.mailer.twig_swift' => __DIR__.'/getCocoricoMessage_Mailer_TwigSwiftService.php',
            'cocorico_message.message.subscriber' => __DIR__.'/getCocoricoMessage_Message_SubscriberService.php',
            'cocorico_message.new_thread.form.type' => __DIR__.'/getCocoricoMessage_NewThread_Form_TypeService.php',
            'cocorico_message.reply.form.type' => __DIR__.'/getCocoricoMessage_Reply_Form_TypeService.php',
            'cocorico_message.thread_manager' => __DIR__.'/getCocoricoMessage_ThreadManagerService.php',
            'cocorico_time.form.type.date_hidden' => __DIR__.'/getCocoricoTime_Form_Type_DateHiddenService.php',
            'cocorico_time.form.type.date_range' => __DIR__.'/getCocoricoTime_Form_Type_DateRangeService.php',
            'cocorico_time.form.type.time_range' => __DIR__.'/getCocoricoTime_Form_Type_TimeRangeService.php',
            'cocorico_time.form.type.weekdays' => __DIR__.'/getCocoricoTime_Form_Type_WeekdaysService.php',
            'cocorico_time.times_range_overlap_validator' => __DIR__.'/getCocoricoTime_TimesRangeOverlapValidatorService.php',
            'cocorico_user.authentication_subscriber' => __DIR__.'/getCocoricoUser_AuthenticationSubscriberService.php',
            'cocorico_user.form.handler.bank_account' => __DIR__.'/getCocoricoUser_Form_Handler_BankAccountService.php',
            'cocorico_user.form.handler.contact' => __DIR__.'/getCocoricoUser_Form_Handler_ContactService.php',
            'cocorico_user.form.handler.registration' => __DIR__.'/getCocoricoUser_Form_Handler_RegistrationService.php',
            'cocorico_user.form.type.login' => __DIR__.'/getCocoricoUser_Form_Type_LoginService.php',
            'cocorico_user.form.type.register' => __DIR__.'/getCocoricoUser_Form_Type_RegisterService.php',
            'cocorico_user.form.type.user_address' => __DIR__.'/getCocoricoUser_Form_Type_UserAddressService.php',
            'cocorico_user.listing_image_upload_validation_listener' => __DIR__.'/getCocoricoUser_ListingImageUploadValidationListenerService.php',
            'cocorico_user.login_manager' => __DIR__.'/getCocoricoUser_LoginManagerService.php',
            'cocorico_user.mailer.twig_swift' => __DIR__.'/getCocoricoUser_Mailer_TwigSwiftService.php',
            'cocorico_user.namer.image_namer' => __DIR__.'/getCocoricoUser_Namer_ImageNamerService.php',
            'cocorico_user.oauth.user.provider.entity' => __DIR__.'/getCocoricoUser_Oauth_User_Provider_EntityService.php',
            'cocorico_user.profile_about_me.form.type' => __DIR__.'/getCocoricoUser_ProfileAboutMe_Form_TypeService.php',
            'cocorico_user.security.access.user_image_voter' => __DIR__.'/getCocoricoUser_Security_Access_UserImageVoterService.php',
            'cocorico_user.user.validator' => __DIR__.'/getCocoricoUser_User_ValidatorService.php',
            'cocorico_user.user_image_upload_listener' => __DIR__.'/getCocoricoUser_UserImageUploadListenerService.php',
            'cocorico_user.user_manager' => __DIR__.'/getCocoricoUser_UserManagerService.php',
            'config.resource.self_checking_resource_checker' => __DIR__.'/getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => __DIR__.'/getConsole_Command_AboutService.php',
            'console.command.assets_install' => __DIR__.'/getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => __DIR__.'/getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => __DIR__.'/getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => __DIR__.'/getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => __DIR__.'/getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => __DIR__.'/getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => __DIR__.'/getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => __DIR__.'/getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => __DIR__.'/getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => __DIR__.'/getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => __DIR__.'/getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => __DIR__.'/getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => __DIR__.'/getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => __DIR__.'/getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => __DIR__.'/getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => __DIR__.'/getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => __DIR__.'/getConsole_Command_YamlLintService.php',
            'console.command_loader' => __DIR__.'/getConsole_CommandLoaderService.php',
            'console.error_listener' => __DIR__.'/getConsole_ErrorListenerService.php',
            'debug.dump_listener' => __DIR__.'/getDebug_DumpListenerService.php',
            'dependency_injection.config.container_parameters_resource_checker' => __DIR__.'/getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'deprecated.form.registry' => __DIR__.'/getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => __DIR__.'/getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.cache_clear_metadata_command' => __DIR__.'/getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => __DIR__.'/getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => __DIR__.'/getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => __DIR__.'/getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => __DIR__.'/getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => __DIR__.'/getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => __DIR__.'/getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => __DIR__.'/getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => __DIR__.'/getDoctrine_DatabaseImportCommandService.php',
            'doctrine.ensure_production_settings_command' => __DIR__.'/getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.fixtures_load_command' => __DIR__.'/getDoctrine_FixturesLoadCommandService.php',
            'doctrine.generate_entities_command' => __DIR__.'/getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => __DIR__.'/getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => __DIR__.'/getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => __DIR__.'/getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.default_entity_manager.property_info_extractor' => __DIR__.'/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php',
            'doctrine.orm.proxy_cache_warmer' => __DIR__.'/getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => __DIR__.'/getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.query_dql_command' => __DIR__.'/getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => __DIR__.'/getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => __DIR__.'/getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => __DIR__.'/getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => __DIR__.'/getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => __DIR__.'/getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => __DIR__.'/getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => __DIR__.'/getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => __DIR__.'/getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.stats_command' => __DIR__.'/getDoctrineCache_StatsCommandService.php',
            'doctrine_migrations.diff_command' => __DIR__.'/getDoctrineMigrations_DiffCommandService.php',
            'doctrine_migrations.execute_command' => __DIR__.'/getDoctrineMigrations_ExecuteCommandService.php',
            'doctrine_migrations.generate_command' => __DIR__.'/getDoctrineMigrations_GenerateCommandService.php',
            'doctrine_migrations.latest_command' => __DIR__.'/getDoctrineMigrations_LatestCommandService.php',
            'doctrine_migrations.migrate_command' => __DIR__.'/getDoctrineMigrations_MigrateCommandService.php',
            'doctrine_migrations.status_command' => __DIR__.'/getDoctrineMigrations_StatusCommandService.php',
            'doctrine_migrations.version_command' => __DIR__.'/getDoctrineMigrations_VersionCommandService.php',
            'doctrine_mongodb.odm.cache.array' => __DIR__.'/getDoctrineMongodb_Odm_Cache_ArrayService.php',
            'doctrine_mongodb.odm.hydrator_cache_warmer' => __DIR__.'/getDoctrineMongodb_Odm_HydratorCacheWarmerService.php',
            'doctrine_mongodb.odm.metadata.annotation' => __DIR__.'/getDoctrineMongodb_Odm_Metadata_AnnotationService.php',
            'doctrine_mongodb.odm.metadata.chain' => __DIR__.'/getDoctrineMongodb_Odm_Metadata_ChainService.php',
            'doctrine_mongodb.odm.metadata.xml' => __DIR__.'/getDoctrineMongodb_Odm_Metadata_XmlService.php',
            'doctrine_mongodb.odm.metadata.yml' => __DIR__.'/getDoctrineMongodb_Odm_Metadata_YmlService.php',
            'doctrine_mongodb.odm.persistent_collection_cache_warmer' => __DIR__.'/getDoctrineMongodb_Odm_PersistentCollectionCacheWarmerService.php',
            'doctrine_mongodb.odm.proxy_cache_warmer' => __DIR__.'/getDoctrineMongodb_Odm_ProxyCacheWarmerService.php',
            'doctrine_odm.mongodb.validator.unique' => __DIR__.'/getDoctrineOdm_Mongodb_Validator_UniqueService.php',
            'fm_elfinder.configurator.default' => __DIR__.'/getFmElfinder_Configurator_DefaultService.php',
            'fm_elfinder.form.type' => __DIR__.'/getFmElfinder_Form_TypeService.php',
            'fm_elfinder.loader.default' => __DIR__.'/getFmElfinder_Loader_DefaultService.php',
            'form.extension' => __DIR__.'/getForm_ExtensionService.php',
            'form.factory' => __DIR__.'/getForm_FactoryService.php',
            'form.registry' => __DIR__.'/getForm_RegistryService.php',
            'form.resolved_type_factory' => __DIR__.'/getForm_ResolvedTypeFactoryService.php',
            'form.server_params' => __DIR__.'/getForm_ServerParamsService.php',
            'form.type.birthday' => __DIR__.'/getForm_Type_BirthdayService.php',
            'form.type.button' => __DIR__.'/getForm_Type_ButtonService.php',
            'form.type.checkbox' => __DIR__.'/getForm_Type_CheckboxService.php',
            'form.type.choice' => __DIR__.'/getForm_Type_ChoiceService.php',
            'form.type.collection' => __DIR__.'/getForm_Type_CollectionService.php',
            'form.type.country' => __DIR__.'/getForm_Type_CountryService.php',
            'form.type.currency' => __DIR__.'/getForm_Type_CurrencyService.php',
            'form.type.date' => __DIR__.'/getForm_Type_DateService.php',
            'form.type.datetime' => __DIR__.'/getForm_Type_DatetimeService.php',
            'form.type.email' => __DIR__.'/getForm_Type_EmailService.php',
            'form.type.entity' => __DIR__.'/getForm_Type_EntityService.php',
            'form.type.file' => __DIR__.'/getForm_Type_FileService.php',
            'form.type.form' => __DIR__.'/getForm_Type_FormService.php',
            'form.type.hidden' => __DIR__.'/getForm_Type_HiddenService.php',
            'form.type.integer' => __DIR__.'/getForm_Type_IntegerService.php',
            'form.type.language' => __DIR__.'/getForm_Type_LanguageService.php',
            'form.type.locale' => __DIR__.'/getForm_Type_LocaleService.php',
            'form.type.money' => __DIR__.'/getForm_Type_MoneyService.php',
            'form.type.mongodb_document' => __DIR__.'/getForm_Type_MongodbDocumentService.php',
            'form.type.number' => __DIR__.'/getForm_Type_NumberService.php',
            'form.type.password' => __DIR__.'/getForm_Type_PasswordService.php',
            'form.type.percent' => __DIR__.'/getForm_Type_PercentService.php',
            'form.type.radio' => __DIR__.'/getForm_Type_RadioService.php',
            'form.type.range' => __DIR__.'/getForm_Type_RangeService.php',
            'form.type.repeated' => __DIR__.'/getForm_Type_RepeatedService.php',
            'form.type.reset' => __DIR__.'/getForm_Type_ResetService.php',
            'form.type.search' => __DIR__.'/getForm_Type_SearchService.php',
            'form.type.submit' => __DIR__.'/getForm_Type_SubmitService.php',
            'form.type.text' => __DIR__.'/getForm_Type_TextService.php',
            'form.type.textarea' => __DIR__.'/getForm_Type_TextareaService.php',
            'form.type.time' => __DIR__.'/getForm_Type_TimeService.php',
            'form.type.timezone' => __DIR__.'/getForm_Type_TimezoneService.php',
            'form.type.url' => __DIR__.'/getForm_Type_UrlService.php',
            'form.type_extension.csrf' => __DIR__.'/getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.data_collector' => __DIR__.'/getForm_TypeExtension_Form_DataCollectorService.php',
            'form.type_extension.form.http_foundation' => __DIR__.'/getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.validator' => __DIR__.'/getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => __DIR__.'/getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => __DIR__.'/getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => __DIR__.'/getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => __DIR__.'/getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.doctrine.mongodb' => __DIR__.'/getForm_TypeGuesser_Doctrine_MongodbService.php',
            'form.type_guesser.validator' => __DIR__.'/getForm_TypeGuesser_ValidatorService.php',
            'fos_message.composer' => __DIR__.'/getFosMessage_ComposerService.php',
            'fos_message.deleter' => __DIR__.'/getFosMessage_DeleterService.php',
            'fos_message.message_reader' => __DIR__.'/getFosMessage_MessageReaderService.php',
            'fos_message.new_thread_form.factory' => __DIR__.'/getFosMessage_NewThreadForm_FactoryService.php',
            'fos_message.new_thread_form.handler' => __DIR__.'/getFosMessage_NewThreadForm_HandlerService.php',
            'fos_message.recipients_selector' => __DIR__.'/getFosMessage_RecipientsSelectorService.php',
            'fos_message.reply_form.factory' => __DIR__.'/getFosMessage_ReplyForm_FactoryService.php',
            'fos_message.reply_form.handler' => __DIR__.'/getFosMessage_ReplyForm_HandlerService.php',
            'fos_message.search_finder.default' => __DIR__.'/getFosMessage_SearchFinder_DefaultService.php',
            'fos_message.search_query_factory.default' => __DIR__.'/getFosMessage_SearchQueryFactory_DefaultService.php',
            'fos_message.sender' => __DIR__.'/getFosMessage_SenderService.php',
            'fos_message.spam_detector' => __DIR__.'/getFosMessage_SpamDetectorService.php',
            'fos_message.validator.authorization' => __DIR__.'/getFosMessage_Validator_AuthorizationService.php',
            'fos_message.validator.reply_authorization' => __DIR__.'/getFosMessage_Validator_ReplyAuthorizationService.php',
            'fos_message.validator.self_recipient' => __DIR__.'/getFosMessage_Validator_SelfRecipientService.php',
            'fos_message.validator.spam' => __DIR__.'/getFosMessage_Validator_SpamService.php',
            'fos_user.change_password.form.factory' => __DIR__.'/getFosUser_ChangePassword_Form_FactoryService.php',
            'fos_user.change_password.form.type' => __DIR__.'/getFosUser_ChangePassword_Form_TypeService.php',
            'fos_user.group.form.factory' => __DIR__.'/getFosUser_Group_Form_FactoryService.php',
            'fos_user.group.form.type' => __DIR__.'/getFosUser_Group_Form_TypeService.php',
            'fos_user.group_manager' => __DIR__.'/getFosUser_GroupManagerService.php',
            'fos_user.listener.authentication' => __DIR__.'/getFosUser_Listener_AuthenticationService.php',
            'fos_user.listener.flash' => __DIR__.'/getFosUser_Listener_FlashService.php',
            'fos_user.listener.resetting' => __DIR__.'/getFosUser_Listener_ResettingService.php',
            'fos_user.object_manager' => __DIR__.'/getFosUser_ObjectManagerService.php',
            'fos_user.profile.form.factory' => __DIR__.'/getFosUser_Profile_Form_FactoryService.php',
            'fos_user.profile.form.type' => __DIR__.'/getFosUser_Profile_Form_TypeService.php',
            'fos_user.registration.form.factory' => __DIR__.'/getFosUser_Registration_Form_FactoryService.php',
            'fos_user.registration.form.type' => __DIR__.'/getFosUser_Registration_Form_TypeService.php',
            'fos_user.resetting.form.factory' => __DIR__.'/getFosUser_Resetting_Form_FactoryService.php',
            'fos_user.resetting.form.type' => __DIR__.'/getFosUser_Resetting_Form_TypeService.php',
            'fos_user.security.interactive_login_listener' => __DIR__.'/getFosUser_Security_InteractiveLoginListenerService.php',
            'fos_user.security.login_manager' => __DIR__.'/getFosUser_Security_LoginManagerService.php',
            'fos_user.user_provider.username' => __DIR__.'/getFosUser_UserProvider_UsernameService.php',
            'fos_user.user_to_username_transformer' => __DIR__.'/getFosUser_UserToUsernameTransformerService.php',
            'fos_user.username_form_type' => __DIR__.'/getFosUser_UsernameFormTypeService.php',
            'fos_user.util.token_generator' => __DIR__.'/getFosUser_Util_TokenGeneratorService.php',
            'fos_user.util.user_manipulator' => __DIR__.'/getFosUser_Util_UserManipulatorService.php',
            'fragment.handler' => __DIR__.'/getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => __DIR__.'/getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => __DIR__.'/getFragment_Renderer_InlineService.php',
            'hwi_oauth.authentication.listener.oauth.main' => __DIR__.'/getHwiOauth_Authentication_Listener_Oauth_MainService.php',
            'hwi_oauth.authentication.provider.oauth.main' => __DIR__.'/getHwiOauth_Authentication_Provider_Oauth_MainService.php',
            'hwi_oauth.http_client' => __DIR__.'/getHwiOauth_HttpClientService.php',
            'hwi_oauth.resource_owner.facebook' => __DIR__.'/getHwiOauth_ResourceOwner_FacebookService.php',
            'hwi_oauth.user_checker' => __DIR__.'/getHwiOauth_UserCheckerService.php',
            'ivory_ck_editor.command.installer' => __DIR__.'/getIvoryCkEditor_Command_InstallerService.php',
            'ivory_ck_editor.config_manager' => __DIR__.'/getIvoryCkEditor_ConfigManagerService.php',
            'ivory_ck_editor.form.type' => __DIR__.'/getIvoryCkEditor_Form_TypeService.php',
            'ivory_ck_editor.installer' => __DIR__.'/getIvoryCkEditor_InstallerService.php',
            'ivory_ck_editor.plugin_manager' => __DIR__.'/getIvoryCkEditor_PluginManagerService.php',
            'ivory_ck_editor.renderer.json_builder' => __DIR__.'/getIvoryCkEditor_Renderer_JsonBuilderService.php',
            'ivory_ck_editor.styles_set_manager' => __DIR__.'/getIvoryCkEditor_StylesSetManagerService.php',
            'ivory_ck_editor.template_manager' => __DIR__.'/getIvoryCkEditor_TemplateManagerService.php',
            'ivory_ck_editor.toolbar_manager' => __DIR__.'/getIvoryCkEditor_ToolbarManagerService.php',
            'jms_aop.interceptor_loader' => __DIR__.'/getJmsAop_InterceptorLoaderService.php',
            'jms_aop.pointcut_container' => __DIR__.'/getJmsAop_PointcutContainerService.php',
            'jms_di_extra.controller_injectors_warmer' => __DIR__.'/getJmsDiExtra_ControllerInjectorsWarmerService.php',
            'jms_di_extra.metadata.converter' => __DIR__.'/getJmsDiExtra_Metadata_ConverterService.php',
            'jms_di_extra.metadata.metadata_factory' => __DIR__.'/getJmsDiExtra_Metadata_MetadataFactoryService.php',
            'jms_di_extra.metadata_driver' => __DIR__.'/getJmsDiExtra_MetadataDriverService.php',
            'jms_di_extra.service_naming_strategy' => __DIR__.'/getJmsDiExtra_ServiceNamingStrategyService.php',
            'jms_i18n_routing.loader' => __DIR__.'/getJmsI18nRouting_LoaderService.php',
            'jms_i18n_routing.locale_choosing_listener' => __DIR__.'/getJmsI18nRouting_LocaleChoosingListenerService.php',
            'jms_i18n_routing.route_exclusion_strategy' => __DIR__.'/getJmsI18nRouting_RouteExclusionStrategyService.php',
            'jms_translation.config_factory' => __DIR__.'/getJmsTranslation_ConfigFactoryService.php',
            'jms_translation.file_source_factory' => __DIR__.'/getJmsTranslation_FileSourceFactoryService.php',
            'jms_translation.loader_manager' => __DIR__.'/getJmsTranslation_LoaderManagerService.php',
            'jms_translation.updater' => __DIR__.'/getJmsTranslation_UpdaterService.php',
            'kernel.class_cache.cache_warmer' => __DIR__.'/getKernel_ClassCache_CacheWarmerService.php',
            'knp_menu.factory' => __DIR__.'/getKnpMenu_FactoryService.php',
            'knp_menu.menu_provider.builder_alias' => __DIR__.'/getKnpMenu_MenuProvider_BuilderAliasService.php',
            'knp_menu.menu_provider.lazy' => __DIR__.'/getKnpMenu_MenuProvider_LazyService.php',
            'knp_menu.renderer.list' => __DIR__.'/getKnpMenu_Renderer_ListService.php',
            'knp_menu.renderer.twig' => __DIR__.'/getKnpMenu_Renderer_TwigService.php',
            'knp_menu.voter.router' => __DIR__.'/getKnpMenu_Voter_RouterService.php',
            'lexik_currency.adapter_collector' => __DIR__.'/getLexikCurrency_AdapterCollectorService.php',
            'lexik_currency.adapter_factory' => __DIR__.'/getLexikCurrency_AdapterFactoryService.php',
            'lexik_currency.converter' => __DIR__.'/getLexikCurrency_ConverterService.php',
            'lexik_currency.doctrine_adapter' => __DIR__.'/getLexikCurrency_DoctrineAdapterService.php',
            'lexik_currency.ecb_adapter' => __DIR__.'/getLexikCurrency_EcbAdapterService.php',
            'lexik_currency.oer_adapter' => __DIR__.'/getLexikCurrency_OerAdapterService.php',
            'lexik_currency.yahoo_adapter' => __DIR__.'/getLexikCurrency_YahooAdapterService.php',
            'liip_imagine' => __DIR__.'/getLiipImagineService.php',
            'liip_imagine.binary.loader.default' => __DIR__.'/getLiipImagine_Binary_Loader_DefaultService.php',
            'liip_imagine.binary.loader.prototype.filesystem' => __DIR__.'/getLiipImagine_Binary_Loader_Prototype_FilesystemService.php',
            'liip_imagine.binary.loader.prototype.stream' => __DIR__.'/getLiipImagine_Binary_Loader_Prototype_StreamService.php',
            'liip_imagine.binary.mime_type_guesser' => __DIR__.'/getLiipImagine_Binary_MimeTypeGuesserService.php',
            'liip_imagine.controller' => __DIR__.'/getLiipImagine_ControllerService.php',
            'liip_imagine.data.manager' => __DIR__.'/getLiipImagine_Data_ManagerService.php',
            'liip_imagine.extension_guesser' => __DIR__.'/getLiipImagine_ExtensionGuesserService.php',
            'liip_imagine.filter.loader.auto_rotate' => __DIR__.'/getLiipImagine_Filter_Loader_AutoRotateService.php',
            'liip_imagine.filter.loader.background' => __DIR__.'/getLiipImagine_Filter_Loader_BackgroundService.php',
            'liip_imagine.filter.loader.crop' => __DIR__.'/getLiipImagine_Filter_Loader_CropService.php',
            'liip_imagine.filter.loader.downscale' => __DIR__.'/getLiipImagine_Filter_Loader_DownscaleService.php',
            'liip_imagine.filter.loader.interlace' => __DIR__.'/getLiipImagine_Filter_Loader_InterlaceService.php',
            'liip_imagine.filter.loader.paste' => __DIR__.'/getLiipImagine_Filter_Loader_PasteService.php',
            'liip_imagine.filter.loader.relative_resize' => __DIR__.'/getLiipImagine_Filter_Loader_RelativeResizeService.php',
            'liip_imagine.filter.loader.resize' => __DIR__.'/getLiipImagine_Filter_Loader_ResizeService.php',
            'liip_imagine.filter.loader.rotate' => __DIR__.'/getLiipImagine_Filter_Loader_RotateService.php',
            'liip_imagine.filter.loader.strip' => __DIR__.'/getLiipImagine_Filter_Loader_StripService.php',
            'liip_imagine.filter.loader.thumbnail' => __DIR__.'/getLiipImagine_Filter_Loader_ThumbnailService.php',
            'liip_imagine.filter.loader.upscale' => __DIR__.'/getLiipImagine_Filter_Loader_UpscaleService.php',
            'liip_imagine.filter.loader.watermark' => __DIR__.'/getLiipImagine_Filter_Loader_WatermarkService.php',
            'liip_imagine.filter.manager' => __DIR__.'/getLiipImagine_Filter_ManagerService.php',
            'liip_imagine.filter.post_processor.jpegoptim' => __DIR__.'/getLiipImagine_Filter_PostProcessor_JpegoptimService.php',
            'liip_imagine.filter.post_processor.optipng' => __DIR__.'/getLiipImagine_Filter_PostProcessor_OptipngService.php',
            'liip_imagine.form.type.image' => __DIR__.'/getLiipImagine_Form_Type_ImageService.php',
            'liip_imagine.mime_type_guesser' => __DIR__.'/getLiipImagine_MimeTypeGuesserService.php',
            'liip_imagine.templating.helper' => __DIR__.'/getLiipImagine_Templating_HelperService.php',
            'monolog.activation_strategy.not_found' => __DIR__.'/getMonolog_ActivationStrategy_NotFoundService.php',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => __DIR__.'/getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService.php',
            'monolog.logger.assetic' => __DIR__.'/getMonolog_Logger_AsseticService.php',
            'monolog.logger.console' => __DIR__.'/getMonolog_Logger_ConsoleService.php',
            'monolog.logger.security' => __DIR__.'/getMonolog_Logger_SecurityService.php',
            'monolog.logger.templating' => __DIR__.'/getMonolog_Logger_TemplatingService.php',
            'oneup_uploader.chunk_manager' => __DIR__.'/getOneupUploader_ChunkManagerService.php',
            'oneup_uploader.chunks_storage' => __DIR__.'/getOneupUploader_ChunksStorageService.php',
            'oneup_uploader.controller.listing_images' => __DIR__.'/getOneupUploader_Controller_ListingImagesService.php',
            'oneup_uploader.controller.user_images' => __DIR__.'/getOneupUploader_Controller_UserImagesService.php',
            'oneup_uploader.error_handler.blueimp' => __DIR__.'/getOneupUploader_ErrorHandler_BlueimpService.php',
            'oneup_uploader.namer.uniqid' => __DIR__.'/getOneupUploader_Namer_UniqidService.php',
            'oneup_uploader.namer.urlsafe' => __DIR__.'/getOneupUploader_Namer_UrlsafeService.php',
            'oneup_uploader.orphanage_manager' => __DIR__.'/getOneupUploader_OrphanageManagerService.php',
            'oneup_uploader.routing.loader' => __DIR__.'/getOneupUploader_Routing_LoaderService.php',
            'oneup_uploader.storage.listing_images' => __DIR__.'/getOneupUploader_Storage_ListingImagesService.php',
            'oneup_uploader.storage.user_images' => __DIR__.'/getOneupUploader_Storage_UserImagesService.php',
            'oneup_uploader.validation_listener.allowed_mimetype' => __DIR__.'/getOneupUploader_ValidationListener_AllowedMimetypeService.php',
            'oneup_uploader.validation_listener.disallowed_mimetype' => __DIR__.'/getOneupUploader_ValidationListener_DisallowedMimetypeService.php',
            'oneup_uploader.validation_listener.max_size' => __DIR__.'/getOneupUploader_ValidationListener_MaxSizeService.php',
            'router.cache_warmer' => __DIR__.'/getRouter_CacheWarmerService.php',
            'routing.loader' => __DIR__.'/getRouting_LoaderService.php',
            'security.access.authenticated_voter' => __DIR__.'/getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.booking_voter' => __DIR__.'/getSecurity_Access_BookingVoterService.php',
            'security.access.expression_voter' => __DIR__.'/getSecurity_Access_ExpressionVoterService.php',
            'security.access.listing_image_voter' => __DIR__.'/getSecurity_Access_ListingImageVoterService.php',
            'security.access.listing_voter' => __DIR__.'/getSecurity_Access_ListingVoterService.php',
            'security.access.review_voter' => __DIR__.'/getSecurity_Access_ReviewVoterService.php',
            'security.access.role_hierarchy_voter' => __DIR__.'/getSecurity_Access_RoleHierarchyVoterService.php',
            'security.access.user_image_voter' => __DIR__.'/getSecurity_Access_UserImageVoterService.php',
            'security.access_listener' => __DIR__.'/getSecurity_AccessListenerService.php',
            'security.access_map' => __DIR__.'/getSecurity_AccessMapService.php',
            'security.authentication.guard_handler' => __DIR__.'/getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.admin' => __DIR__.'/getSecurity_Authentication_Listener_Anonymous_AdminService.php',
            'security.authentication.listener.anonymous.main' => __DIR__.'/getSecurity_Authentication_Listener_Anonymous_MainService.php',
            'security.authentication.listener.form.admin' => __DIR__.'/getSecurity_Authentication_Listener_Form_AdminService.php',
            'security.authentication.listener.form.main' => __DIR__.'/getSecurity_Authentication_Listener_Form_MainService.php',
            'security.authentication.provider.anonymous.admin' => __DIR__.'/getSecurity_Authentication_Provider_Anonymous_AdminService.php',
            'security.authentication.provider.anonymous.main' => __DIR__.'/getSecurity_Authentication_Provider_Anonymous_MainService.php',
            'security.authentication.provider.dao.admin' => __DIR__.'/getSecurity_Authentication_Provider_Dao_AdminService.php',
            'security.authentication.provider.dao.main' => __DIR__.'/getSecurity_Authentication_Provider_Dao_MainService.php',
            'security.authentication.session_strategy' => __DIR__.'/getSecurity_Authentication_SessionStrategyService.php',
            'security.authentication.switchuser_listener.main' => __DIR__.'/getSecurity_Authentication_SwitchuserListener_MainService.php',
            'security.authentication_utils' => __DIR__.'/getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => __DIR__.'/getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => __DIR__.'/getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => __DIR__.'/getSecurity_ContextListener_0Service.php',
            'security.context_listener.1' => __DIR__.'/getSecurity_ContextListener_1Service.php',
            'security.csrf.token_manager' => __DIR__.'/getSecurity_Csrf_TokenManagerService.php',
            'security.firewall.map.context.admin' => __DIR__.'/getSecurity_Firewall_Map_Context_AdminService.php',
            'security.firewall.map.context.dev' => __DIR__.'/getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.main' => __DIR__.'/getSecurity_Firewall_Map_Context_MainService.php',
            'security.logout.handler.session' => __DIR__.'/getSecurity_Logout_Handler_SessionService.php',
            'security.logout_listener.admin' => __DIR__.'/getSecurity_LogoutListener_AdminService.php',
            'security.logout_listener.main' => __DIR__.'/getSecurity_LogoutListener_MainService.php',
            'security.password_encoder' => __DIR__.'/getSecurity_PasswordEncoderService.php',
            'security.request_matcher.atg4mne' => __DIR__.'/getSecurity_RequestMatcher_Atg4mneService.php',
            'security.request_matcher.hwsmhqp' => __DIR__.'/getSecurity_RequestMatcher_HwsmhqpService.php',
            'security.request_matcher.zfhj2lw' => __DIR__.'/getSecurity_RequestMatcher_Zfhj2lwService.php',
            'security.user_value_resolver' => __DIR__.'/getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => __DIR__.'/getSecurity_Validator_UserPasswordService.php',
            'sensio_distribution.security_checker' => __DIR__.'/getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => __DIR__.'/getSensioDistribution_SecurityChecker_CommandService.php',
            'services_resetter' => __DIR__.'/getServicesResetterService.php',
            'session.storage.filesystem' => __DIR__.'/getSession_Storage_FilesystemService.php',
            'session.storage.php_bridge' => __DIR__.'/getSession_Storage_PhpBridgeService.php',
            'simplethings_entityaudit.reader' => __DIR__.'/getSimplethingsEntityaudit_ReaderService.php',
            'sonata.admin.audit.manager' => __DIR__.'/getSonata_Admin_Audit_ManagerService.php',
            'sonata.admin.audit.orm.reader' => __DIR__.'/getSonata_Admin_Audit_Orm_ReaderService.php',
            'sonata.admin.block.admin_list' => __DIR__.'/getSonata_Admin_Block_AdminListService.php',
            'sonata.admin.block.search_result' => __DIR__.'/getSonata_Admin_Block_SearchResultService.php',
            'sonata.admin.block.stats' => __DIR__.'/getSonata_Admin_Block_StatsService.php',
            'sonata.admin.breadcrumbs_builder' => __DIR__.'/getSonata_Admin_BreadcrumbsBuilderService.php',
            'sonata.admin.builder.filter.factory' => __DIR__.'/getSonata_Admin_Builder_Filter_FactoryService.php',
            'sonata.admin.builder.orm_datagrid' => __DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php',
            'sonata.admin.builder.orm_form' => __DIR__.'/getSonata_Admin_Builder_OrmFormService.php',
            'sonata.admin.builder.orm_list' => __DIR__.'/getSonata_Admin_Builder_OrmListService.php',
            'sonata.admin.builder.orm_show' => __DIR__.'/getSonata_Admin_Builder_OrmShowService.php',
            'sonata.admin.controller.admin' => __DIR__.'/getSonata_Admin_Controller_AdminService.php',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => __DIR__.'/getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService.php',
            'sonata.admin.event.extension' => __DIR__.'/getSonata_Admin_Event_ExtensionService.php',
            'sonata.admin.exporter' => __DIR__.'/getSonata_Admin_ExporterService.php',
            'sonata.admin.form.extension.choice' => __DIR__.'/getSonata_Admin_Form_Extension_ChoiceService.php',
            'sonata.admin.form.extension.field' => __DIR__.'/getSonata_Admin_Form_Extension_FieldService.php',
            'sonata.admin.form.extension.field.mopa' => __DIR__.'/getSonata_Admin_Form_Extension_Field_MopaService.php',
            'sonata.admin.form.filter.type.choice' => __DIR__.'/getSonata_Admin_Form_Filter_Type_ChoiceService.php',
            'sonata.admin.form.filter.type.date' => __DIR__.'/getSonata_Admin_Form_Filter_Type_DateService.php',
            'sonata.admin.form.filter.type.daterange' => __DIR__.'/getSonata_Admin_Form_Filter_Type_DaterangeService.php',
            'sonata.admin.form.filter.type.datetime' => __DIR__.'/getSonata_Admin_Form_Filter_Type_DatetimeService.php',
            'sonata.admin.form.filter.type.datetime_range' => __DIR__.'/getSonata_Admin_Form_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.form.filter.type.default' => __DIR__.'/getSonata_Admin_Form_Filter_Type_DefaultService.php',
            'sonata.admin.form.filter.type.number' => __DIR__.'/getSonata_Admin_Form_Filter_Type_NumberService.php',
            'sonata.admin.form.type.admin' => __DIR__.'/getSonata_Admin_Form_Type_AdminService.php',
            'sonata.admin.form.type.collection' => __DIR__.'/getSonata_Admin_Form_Type_CollectionService.php',
            'sonata.admin.form.type.model_autocomplete' => __DIR__.'/getSonata_Admin_Form_Type_ModelAutocompleteService.php',
            'sonata.admin.form.type.model_choice' => __DIR__.'/getSonata_Admin_Form_Type_ModelChoiceService.php',
            'sonata.admin.form.type.model_hidden' => __DIR__.'/getSonata_Admin_Form_Type_ModelHiddenService.php',
            'sonata.admin.form.type.model_list' => __DIR__.'/getSonata_Admin_Form_Type_ModelListService.php',
            'sonata.admin.form.type.model_reference' => __DIR__.'/getSonata_Admin_Form_Type_ModelReferenceService.php',
            'sonata.admin.guesser.orm_datagrid' => __DIR__.'/getSonata_Admin_Guesser_OrmDatagridService.php',
            'sonata.admin.guesser.orm_datagrid_chain' => __DIR__.'/getSonata_Admin_Guesser_OrmDatagridChainService.php',
            'sonata.admin.guesser.orm_list' => __DIR__.'/getSonata_Admin_Guesser_OrmListService.php',
            'sonata.admin.guesser.orm_list_chain' => __DIR__.'/getSonata_Admin_Guesser_OrmListChainService.php',
            'sonata.admin.guesser.orm_show' => __DIR__.'/getSonata_Admin_Guesser_OrmShowService.php',
            'sonata.admin.guesser.orm_show_chain' => __DIR__.'/getSonata_Admin_Guesser_OrmShowChainService.php',
            'sonata.admin.helper' => __DIR__.'/getSonata_Admin_HelperService.php',
            'sonata.admin.label.strategy.bc' => __DIR__.'/getSonata_Admin_Label_Strategy_BcService.php',
            'sonata.admin.label.strategy.form_component' => __DIR__.'/getSonata_Admin_Label_Strategy_FormComponentService.php',
            'sonata.admin.label.strategy.native' => __DIR__.'/getSonata_Admin_Label_Strategy_NativeService.php',
            'sonata.admin.label.strategy.noop' => __DIR__.'/getSonata_Admin_Label_Strategy_NoopService.php',
            'sonata.admin.label.strategy.underscore' => __DIR__.'/getSonata_Admin_Label_Strategy_UnderscoreService.php',
            'sonata.admin.manager.orm' => __DIR__.'/getSonata_Admin_Manager_OrmService.php',
            'sonata.admin.manipulator.acl.admin' => __DIR__.'/getSonata_Admin_Manipulator_Acl_AdminService.php',
            'sonata.admin.manipulator.acl.object.orm' => __DIR__.'/getSonata_Admin_Manipulator_Acl_Object_OrmService.php',
            'sonata.admin.menu.group_provider' => __DIR__.'/getSonata_Admin_Menu_GroupProviderService.php',
            'sonata.admin.menu.matcher.voter.active' => __DIR__.'/getSonata_Admin_Menu_Matcher_Voter_ActiveService.php',
            'sonata.admin.menu.matcher.voter.children' => __DIR__.'/getSonata_Admin_Menu_Matcher_Voter_ChildrenService.php',
            'sonata.admin.menu_builder' => __DIR__.'/getSonata_Admin_MenuBuilderService.php',
            'sonata.admin.object.manipulator.acl.admin' => __DIR__.'/getSonata_Admin_Object_Manipulator_Acl_AdminService.php',
            'sonata.admin.route.cache' => __DIR__.'/getSonata_Admin_Route_CacheService.php',
            'sonata.admin.route.cache_warmup' => __DIR__.'/getSonata_Admin_Route_CacheWarmupService.php',
            'sonata.admin.route.default_generator' => __DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php',
            'sonata.admin.route.path_info' => __DIR__.'/getSonata_Admin_Route_PathInfoService.php',
            'sonata.admin.route.query_string' => __DIR__.'/getSonata_Admin_Route_QueryStringService.php',
            'sonata.admin.route_loader' => __DIR__.'/getSonata_Admin_RouteLoaderService.php',
            'sonata.admin.search.handler' => __DIR__.'/getSonata_Admin_Search_HandlerService.php',
            'sonata.admin.security.handler' => __DIR__.'/getSonata_Admin_Security_HandlerService.php',
            'sonata.admin.sidebar_menu' => __DIR__.'/getSonata_Admin_SidebarMenuService.php',
            'sonata.admin.translator.extractor.jms_translator_bundle' => __DIR__.'/getSonata_Admin_Translator_Extractor_JmsTranslatorBundleService.php',
            'sonata.admin.validator.inline' => __DIR__.'/getSonata_Admin_Validator_InlineService.php',
            'sonata.admin_doctrine_orm.block.audit' => __DIR__.'/getSonata_AdminDoctrineOrm_Block_AuditService.php',
            'sonata.block.cache.handler.noop' => __DIR__.'/getSonata_Block_Cache_Handler_NoopService.php',
            'sonata.block.exception.filter.debug_only' => __DIR__.'/getSonata_Block_Exception_Filter_DebugOnlyService.php',
            'sonata.block.exception.filter.ignore_block_exception' => __DIR__.'/getSonata_Block_Exception_Filter_IgnoreBlockExceptionService.php',
            'sonata.block.exception.filter.keep_all' => __DIR__.'/getSonata_Block_Exception_Filter_KeepAllService.php',
            'sonata.block.exception.filter.keep_none' => __DIR__.'/getSonata_Block_Exception_Filter_KeepNoneService.php',
            'sonata.block.exception.renderer.inline' => __DIR__.'/getSonata_Block_Exception_Renderer_InlineService.php',
            'sonata.block.exception.renderer.inline_debug' => __DIR__.'/getSonata_Block_Exception_Renderer_InlineDebugService.php',
            'sonata.block.exception.renderer.throw' => __DIR__.'/getSonata_Block_Exception_Renderer_ThrowService.php',
            'sonata.block.form.type.block' => __DIR__.'/getSonata_Block_Form_Type_BlockService.php',
            'sonata.block.form.type.container_template' => __DIR__.'/getSonata_Block_Form_Type_ContainerTemplateService.php',
            'sonata.block.menu.registry' => __DIR__.'/getSonata_Block_Menu_RegistryService.php',
            'sonata.block.service.container' => __DIR__.'/getSonata_Block_Service_ContainerService.php',
            'sonata.block.service.empty' => __DIR__.'/getSonata_Block_Service_EmptyService.php',
            'sonata.block.service.menu' => __DIR__.'/getSonata_Block_Service_MenuService.php',
            'sonata.block.service.rss' => __DIR__.'/getSonata_Block_Service_RssService.php',
            'sonata.block.service.template' => __DIR__.'/getSonata_Block_Service_TemplateService.php',
            'sonata.block.service.text' => __DIR__.'/getSonata_Block_Service_TextService.php',
            'sonata.core.date.moment_format_converter' => __DIR__.'/getSonata_Core_Date_MomentFormatConverterService.php',
            'sonata.core.form.type.array' => __DIR__.'/getSonata_Core_Form_Type_ArrayService.php',
            'sonata.core.form.type.boolean' => __DIR__.'/getSonata_Core_Form_Type_BooleanService.php',
            'sonata.core.form.type.collection' => __DIR__.'/getSonata_Core_Form_Type_CollectionService.php',
            'sonata.core.form.type.color' => __DIR__.'/getSonata_Core_Form_Type_ColorService.php',
            'sonata.core.form.type.color_selector' => __DIR__.'/getSonata_Core_Form_Type_ColorSelectorService.php',
            'sonata.core.form.type.date_picker' => __DIR__.'/getSonata_Core_Form_Type_DatePickerService.php',
            'sonata.core.form.type.date_range' => __DIR__.'/getSonata_Core_Form_Type_DateRangeService.php',
            'sonata.core.form.type.date_range_picker' => __DIR__.'/getSonata_Core_Form_Type_DateRangePickerService.php',
            'sonata.core.form.type.datetime_picker' => __DIR__.'/getSonata_Core_Form_Type_DatetimePickerService.php',
            'sonata.core.form.type.datetime_range' => __DIR__.'/getSonata_Core_Form_Type_DatetimeRangeService.php',
            'sonata.core.form.type.datetime_range_picker' => __DIR__.'/getSonata_Core_Form_Type_DatetimeRangePickerService.php',
            'sonata.core.form.type.equal' => __DIR__.'/getSonata_Core_Form_Type_EqualService.php',
            'sonata.core.form.type.translatable_choice' => __DIR__.'/getSonata_Core_Form_Type_TranslatableChoiceService.php',
            'sonata.core.slugify.cocur' => __DIR__.'/getSonata_Core_Slugify_CocurService.php',
            'sonata.core.slugify.native' => __DIR__.'/getSonata_Core_Slugify_NativeService.php',
            'sonata.core.validator.inline' => __DIR__.'/getSonata_Core_Validator_InlineService.php',
            'sonata.easy_extends.generator.bundle' => __DIR__.'/getSonata_EasyExtends_Generator_BundleService.php',
            'sonata.easy_extends.generator.odm' => __DIR__.'/getSonata_EasyExtends_Generator_OdmService.php',
            'sonata.easy_extends.generator.orm' => __DIR__.'/getSonata_EasyExtends_Generator_OrmService.php',
            'sonata.easy_extends.generator.phpcr' => __DIR__.'/getSonata_EasyExtends_Generator_PhpcrService.php',
            'sonata.easy_extends.generator.serializer' => __DIR__.'/getSonata_EasyExtends_Generator_SerializerService.php',
            'sonata.user.editable_role_builder' => __DIR__.'/getSonata_User_EditableRoleBuilderService.php',
            'sonata.user.form.gender_list' => __DIR__.'/getSonata_User_Form_GenderListService.php',
            'sonata.user.form.type.security_roles' => __DIR__.'/getSonata_User_Form_Type_SecurityRolesService.php',
            'sonata.user.group_manager' => __DIR__.'/getSonata_User_GroupManagerService.php',
            'sonata.user.manager.user' => __DIR__.'/getSonata_User_Manager_UserService.php',
            'sonata.user.user_manager' => __DIR__.'/getSonata_User_UserManagerService.php',
            'stof_doctrine_extensions.uploadable.manager' => __DIR__.'/getStofDoctrineExtensions_Uploadable_ManagerService.php',
            'swiftmailer.command.debug' => __DIR__.'/getSwiftmailer_Command_DebugService.php',
            'swiftmailer.command.new_email' => __DIR__.'/getSwiftmailer_Command_NewEmailService.php',
            'swiftmailer.command.send_email' => __DIR__.'/getSwiftmailer_Command_SendEmailService.php',
            'swiftmailer.email_sender.listener' => __DIR__.'/getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => __DIR__.'/getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => __DIR__.'/getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.spool' => __DIR__.'/getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => __DIR__.'/getSwiftmailer_Mailer_Default_TransportService.php',
            'swiftmailer.mailer.default.transport.eventdispatcher' => __DIR__.'/getSwiftmailer_Mailer_Default_Transport_EventdispatcherService.php',
            'swiftmailer.mailer.default.transport.real' => __DIR__.'/getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'templating' => __DIR__.'/getTemplatingService.php',
            'templating.cache_warmer.template_paths' => __DIR__.'/getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => __DIR__.'/getTemplating_FilenameParserService.php',
            'templating.finder' => __DIR__.'/getTemplating_FinderService.php',
            'templating.helper.logout_url' => __DIR__.'/getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => __DIR__.'/getTemplating_Helper_SecurityService.php',
            'templating.loader' => __DIR__.'/getTemplating_LoaderService.php',
            'translation.dumper.csv' => __DIR__.'/getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => __DIR__.'/getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => __DIR__.'/getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => __DIR__.'/getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => __DIR__.'/getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => __DIR__.'/getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => __DIR__.'/getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => __DIR__.'/getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => __DIR__.'/getTranslation_Dumper_XliffService.php',
            'translation.dumper.yaml' => __DIR__.'/getTranslation_Dumper_YamlService.php',
            'translation.dumper.yml' => __DIR__.'/getTranslation_Dumper_YmlService.php',
            'translation.extractor' => __DIR__.'/getTranslation_ExtractorService.php',
            'translation.extractor.php' => __DIR__.'/getTranslation_Extractor_PhpService.php',
            'translation.loader' => __DIR__.'/getTranslation_LoaderService.php',
            'translation.loader.csv' => __DIR__.'/getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => __DIR__.'/getTranslation_Loader_DatService.php',
            'translation.loader.ini' => __DIR__.'/getTranslation_Loader_IniService.php',
            'translation.loader.json' => __DIR__.'/getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => __DIR__.'/getTranslation_Loader_MoService.php',
            'translation.loader.php' => __DIR__.'/getTranslation_Loader_PhpService.php',
            'translation.loader.po' => __DIR__.'/getTranslation_Loader_PoService.php',
            'translation.loader.qt' => __DIR__.'/getTranslation_Loader_QtService.php',
            'translation.loader.res' => __DIR__.'/getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => __DIR__.'/getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => __DIR__.'/getTranslation_Loader_YmlService.php',
            'translation.reader' => __DIR__.'/getTranslation_ReaderService.php',
            'translation.warmer' => __DIR__.'/getTranslation_WarmerService.php',
            'translation.writer' => __DIR__.'/getTranslation_WriterService.php',
            'twig.cache_warmer' => __DIR__.'/getTwig_CacheWarmerService.php',
            'twig.command.debug' => __DIR__.'/getTwig_Command_DebugService.php',
            'twig.command.lint' => __DIR__.'/getTwig_Command_LintService.php',
            'twig.controller.exception' => __DIR__.'/getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => __DIR__.'/getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => __DIR__.'/getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => __DIR__.'/getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => __DIR__.'/getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => __DIR__.'/getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => __DIR__.'/getTwig_Translation_ExtractorService.php',
            'validator.email' => __DIR__.'/getValidator_EmailService.php',
            'validator.expression' => __DIR__.'/getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => __DIR__.'/getValidator_Mapping_CacheWarmerService.php',
            'var_dumper.cli_dumper' => __DIR__.'/getVarDumper_CliDumperService.php',
            'web_profiler.controller.exception' => __DIR__.'/getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => __DIR__.'/getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => __DIR__.'/getWebProfiler_Controller_RouterService.php',
            'white_october_breadcrumbs' => __DIR__.'/getWhiteOctoberBreadcrumbsService.php',
            'white_october_breadcrumbs.helper' => __DIR__.'/getWhiteOctoberBreadcrumbs_HelperService.php',
        );
        $this->privates = array(
            'a2lix_translation_form.default.service.locale_provider' => true,
            'a2lix_translation_form.manager_registry' => true,
            'bazinga_geocoder.geocoder' => true,
            'doctrine.odm.mongodb.document_manager' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine_mongodb.odm.cache' => true,
            'doctrine_mongodb.odm.metadata.annotation_reader' => true,
            'fm_elfinder.configurator' => true,
            'fm_elfinder.loader' => true,
            'fos_message.search_finder' => true,
            'fos_message.search_query_factory' => true,
            'fos_user.mailer' => true,
            'fos_user.user_manager' => true,
            'fos_user.util.username_canonicalizer' => true,
            'geocoder' => true,
            'hwi_oauth.account.connector' => true,
            'hwi_oauth.user.provider.entity.main' => true,
            'lexik_currency.default_adapter' => true,
            'session.storage' => true,
            'simplethings_entityaudit.username_callable' => true,
            'sonata.block.cache.handler' => true,
            'sonata.block.context_manager' => true,
            'sonata.block.renderer' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport' => true,
            'swiftmailer.transport.real' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateDocumentsDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand' => true,
            'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand' => true,
            'Geocoder\\ProviderAggregator' => true,
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => true,
            'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => true,
            'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => true,
            'a2lix_translation_form.default.listener.translations' => true,
            'a2lix_translation_form.default.listener.translationsForms' => true,
            'a2lix_translation_form.default.service.parameter_locale_provider' => true,
            'a2lix_translation_form.default.service.translation' => true,
            'a2lix_translation_form.default.type.translatedEntity' => true,
            'a2lix_translation_form.default.type.translations' => true,
            'a2lix_translation_form.default.type.translationsFields' => true,
            'a2lix_translation_form.default.type.translationsForms' => true,
            'a2lix_translation_form.default.type.translationsLocalesSelector' => true,
            'annotation_reader' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_metadata_factory' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assetic.asset_factory' => true,
            'assetic.asset_manager' => true,
            'assetic.asset_manager_cache_warmer' => true,
            'assetic.filter.cssrewrite' => true,
            'assetic.filter.jsqueeze' => true,
            'assetic.filter.minifycsscompressor' => true,
            'assetic.filter_manager' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'bazinga_geocoder.provider.google_maps' => true,
            'bazinga_geocoder.provider.google_maps.profiler' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'cocorico.ajax.authentication_listener' => true,
            'cocorico.authentication_success_listener' => true,
            'cocorico.booking.manager' => true,
            'cocorico.booking.subscriber' => true,
            'cocorico.booking_bank_wire.manager' => true,
            'cocorico.booking_bank_wire.subscriber' => true,
            'cocorico.booking_payin_refund.manager' => true,
            'cocorico.booking_payin_refund.subscriber' => true,
            'cocorico.booking_user_address_entity_listener' => true,
            'cocorico.booking_validate.subscriber' => true,
            'cocorico.booking_validator' => true,
            'cocorico.breadcrumbs_loader' => true,
            'cocorico.breadcrumbs_manager' => true,
            'cocorico.breadcrumbs_yaml_locator' => true,
            'cocorico.breadcrumbs_yaml_parser' => true,
            'cocorico.extra_bundle.routing_loader' => true,
            'cocorico.form.booking.status_filter' => true,
            'cocorico.form.handler.booking' => true,
            'cocorico.form.handler.booking.asker.dashboard' => true,
            'cocorico.form.handler.booking.offerer.dashboard' => true,
            'cocorico.form.handler.booking_price' => true,
            'cocorico.form.handler.listing' => true,
            'cocorico.form.handler.listing_availability.price.dashboard' => true,
            'cocorico.form.handler.listing_availability.status.dashboard' => true,
            'cocorico.form.handler.review' => true,
            'cocorico.form.type.booking_edit' => true,
            'cocorico.form.type.booking_new' => true,
            'cocorico.form.type.booking_price' => true,
            'cocorico.form.type.booking_user_address' => true,
            'cocorico.form.type.country_filtered' => true,
            'cocorico.form.type.entity_hidden' => true,
            'cocorico.form.type.language_filtered' => true,
            'cocorico.form.type.listing_category' => true,
            'cocorico.form.type.listing_characteristic' => true,
            'cocorico.form.type.listing_edit' => true,
            'cocorico.form.type.listing_edit_availabilities' => true,
            'cocorico.form.type.listing_edit_availabilities_prices' => true,
            'cocorico.form.type.listing_edit_availabilities_status' => true,
            'cocorico.form.type.listing_edit_availability_price' => true,
            'cocorico.form.type.listing_edit_availability_status' => true,
            'cocorico.form.type.listing_edit_categories' => true,
            'cocorico.form.type.listing_edit_categories_ajax' => true,
            'cocorico.form.type.listing_edit_characteristic' => true,
            'cocorico.form.type.listing_edit_description' => true,
            'cocorico.form.type.listing_edit_duration' => true,
            'cocorico.form.type.listing_edit_images' => true,
            'cocorico.form.type.listing_edit_location' => true,
            'cocorico.form.type.listing_edit_price' => true,
            'cocorico.form.type.listing_edit_status' => true,
            'cocorico.form.type.listing_listing_characteristic' => true,
            'cocorico.form.type.listing_new' => true,
            'cocorico.form.type.listing_new_categories' => true,
            'cocorico.form.type.listing_search' => true,
            'cocorico.form.type.listing_search_home' => true,
            'cocorico.form.type.listing_search_result' => true,
            'cocorico.form.type.price' => true,
            'cocorico.form.type.price_range' => true,
            'cocorico.form.type.review_new' => true,
            'cocorico.helper.global' => true,
            'cocorico.image_type_extension' => true,
            'cocorico.listing.manager' => true,
            'cocorico.listing_availabilities_price_validator' => true,
            'cocorico.listing_availability.manager' => true,
            'cocorico.listing_availability_param_converter' => true,
            'cocorico.listing_availability_time.manager' => true,
            'cocorico.listing_availability_validator' => true,
            'cocorico.listing_discount_validator' => true,
            'cocorico.listing_image_upload_listener' => true,
            'cocorico.listing_image_upload_validation_listener' => true,
            'cocorico.listing_param_converter' => true,
            'cocorico.listing_validator' => true,
            'cocorico.mailer.twig_swift' => true,
            'cocorico.namer.image_namer' => true,
            'cocorico.review.listener' => true,
            'cocorico.review.manager' => true,
            'cocorico.star_rating.form.type' => true,
            'cocorico.star_rating.twig.extension' => true,
            'cocorico.times_range_overlap_validator' => true,
            'cocorico.translator.admin.extractor' => true,
            'cocorico.translator.breadcrumbs_extractor' => true,
            'cocorico.translator.entity.extractor' => true,
            'cocorico.translator.manager' => true,
            'cocorico.twig.core_extension' => true,
            'cocorico.twig.country_extension' => true,
            'cocorico.twig.extra_bundle_extension' => true,
            'cocorico.twig.language_extension' => true,
            'cocorico_contact.contact.manager' => true,
            'cocorico_contact.form.handler.contact' => true,
            'cocorico_contact.form.type.contact_new' => true,
            'cocorico_contact.mailer.twig_swift' => true,
            'cocorico_geo.form.type.geocoding' => true,
            'cocorico_geo.geocoding.manager' => true,
            'cocorico_geo.twig.cocorico_geo_extension' => true,
            'cocorico_message.booking.subscriber' => true,
            'cocorico_message.mailer.twig_swift' => true,
            'cocorico_message.message.subscriber' => true,
            'cocorico_message.thread_manager' => true,
            'cocorico_time.form.type.date_hidden' => true,
            'cocorico_time.form.type.date_range' => true,
            'cocorico_time.form.type.time_range' => true,
            'cocorico_time.form.type.weekdays' => true,
            'cocorico_time.times_range_overlap_validator' => true,
            'cocorico_time.twig.intl_extension' => true,
            'cocorico_time.twig.time_extension' => true,
            'cocorico_user.authentication_subscriber' => true,
            'cocorico_user.form.type.login' => true,
            'cocorico_user.form.type.register' => true,
            'cocorico_user.form.type.user_address' => true,
            'cocorico_user.listing_image_upload_validation_listener' => true,
            'cocorico_user.login_manager' => true,
            'cocorico_user.namer.image_namer' => true,
            'cocorico_user.oauth.user.provider.entity' => true,
            'cocorico_user.profile_about_me.form.type' => true,
            'cocorico_user.security.access.user_image_voter' => true,
            'cocorico_user.user.validator' => true,
            'cocorico_user.user_entity_listener' => true,
            'cocorico_user.user_image_upload_listener' => true,
            'cocorico_user.user_request.listener' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'data_collector.form' => true,
            'data_collector.form.extractor' => true,
            'data_collector.request' => true,
            'data_collector.router' => true,
            'data_collector.translation' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.dump_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.fixtures_load_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_manager' => true,
            'doctrine.orm.default_entity_manager.delegate' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => true,
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => true,
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => true,
            'doctrine_cache.stats_command' => true,
            'doctrine_migrations.diff_command' => true,
            'doctrine_migrations.execute_command' => true,
            'doctrine_migrations.generate_command' => true,
            'doctrine_migrations.latest_command' => true,
            'doctrine_migrations.migrate_command' => true,
            'doctrine_migrations.status_command' => true,
            'doctrine_migrations.version_command' => true,
            'doctrine_mongodb.odm.cache.array' => true,
            'doctrine_mongodb.odm.data_collector.pretty' => true,
            'doctrine_mongodb.odm.default_configuration' => true,
            'doctrine_mongodb.odm.default_manager_configurator' => true,
            'doctrine_mongodb.odm.event_manager' => true,
            'doctrine_mongodb.odm.hydrator_cache_warmer' => true,
            'doctrine_mongodb.odm.metadata.annotation' => true,
            'doctrine_mongodb.odm.metadata.chain' => true,
            'doctrine_mongodb.odm.metadata.xml' => true,
            'doctrine_mongodb.odm.metadata.yml' => true,
            'doctrine_mongodb.odm.persistent_collection_cache_warmer' => true,
            'doctrine_mongodb.odm.proxy_cache_warmer' => true,
            'doctrine_odm.mongodb.validator.unique' => true,
            'doctrine_odm.mongodb.validator_initializer' => true,
            'file_locator' => true,
            'fm_elfinder.configurator.default' => true,
            'fm_elfinder.form.type' => true,
            'fm_elfinder.loader.default' => true,
            'form.extension' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.entity' => true,
            'form.type.mongodb_document' => true,
            'form.type_guesser.doctrine' => true,
            'form.type_guesser.doctrine.mongodb' => true,
            'fos_message.authorizer' => true,
            'fos_message.composer' => true,
            'fos_message.deleter' => true,
            'fos_message.message_manager' => true,
            'fos_message.message_reader' => true,
            'fos_message.new_thread_form.factory' => true,
            'fos_message.new_thread_form.handler' => true,
            'fos_message.participant_provider' => true,
            'fos_message.provider' => true,
            'fos_message.reply_form.factory' => true,
            'fos_message.reply_form.handler' => true,
            'fos_message.sender' => true,
            'fos_message.spam_detector' => true,
            'fos_message.thread_manager' => true,
            'fos_message.thread_reader' => true,
            'fos_message.twig_extension' => true,
            'fos_message.validator.authorization' => true,
            'fos_message.validator.reply_authorization' => true,
            'fos_message.validator.self_recipient' => true,
            'fos_message.validator.spam' => true,
            'fos_user.change_password.form.factory' => true,
            'fos_user.change_password.form.type' => true,
            'fos_user.group.form.factory' => true,
            'fos_user.group.form.type' => true,
            'fos_user.group_manager' => true,
            'fos_user.listener.authentication' => true,
            'fos_user.listener.flash' => true,
            'fos_user.listener.resetting' => true,
            'fos_user.object_manager' => true,
            'fos_user.profile.form.factory' => true,
            'fos_user.profile.form.type' => true,
            'fos_user.registration.form.factory' => true,
            'fos_user.registration.form.type' => true,
            'fos_user.resetting.form.factory' => true,
            'fos_user.resetting.form.type' => true,
            'fos_user.security.interactive_login_listener' => true,
            'fos_user.security.login_manager' => true,
            'fos_user.user_provider.username' => true,
            'fos_user.user_to_username_transformer' => true,
            'fos_user.username_form_type' => true,
            'fos_user.util.canonical_fields_updater' => true,
            'fos_user.util.email_canonicalizer' => true,
            'fos_user.util.password_updater' => true,
            'fos_user.util.token_generator' => true,
            'fos_user.util.user_manipulator' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'framework_extra_bundle.argument_name_convertor' => true,
            'framework_extra_bundle.event.is_granted' => true,
            'hwi_oauth.authentication.listener.oauth.main' => true,
            'hwi_oauth.authentication.provider.oauth.main' => true,
            'hwi_oauth.http_client' => true,
            'hwi_oauth.resource_owner.facebook' => true,
            'hwi_oauth.resource_ownermap.main' => true,
            'hwi_oauth.security.oauth_utils' => true,
            'hwi_oauth.templating.helper.oauth' => true,
            'hwi_oauth.user_checker' => true,
            'ivory_ck_editor.command.installer' => true,
            'ivory_ck_editor.config_manager' => true,
            'ivory_ck_editor.form.type' => true,
            'ivory_ck_editor.installer' => true,
            'ivory_ck_editor.plugin_manager' => true,
            'ivory_ck_editor.renderer' => true,
            'ivory_ck_editor.renderer.json_builder' => true,
            'ivory_ck_editor.styles_set_manager' => true,
            'ivory_ck_editor.template_manager' => true,
            'ivory_ck_editor.toolbar_manager' => true,
            'ivory_ck_editor.twig_extension' => true,
            'jms_aop.interceptor_loader' => true,
            'jms_aop.pointcut_container' => true,
            'jms_di_extra.controller_injectors_warmer' => true,
            'jms_di_extra.controller_resolver' => true,
            'jms_di_extra.metadata.converter' => true,
            'jms_di_extra.metadata.metadata_factory' => true,
            'jms_di_extra.metadata_driver' => true,
            'jms_di_extra.service_naming_strategy' => true,
            'jms_i18n_routing.locale_resolver.default' => true,
            'jms_i18n_routing.route_exclusion_strategy' => true,
            'jms_translation.config_factory' => true,
            'jms_translation.file_source_factory' => true,
            'jms_translation.loader_manager' => true,
            'jms_translation.twig_extension' => true,
            'jms_translation.updater' => true,
            'kernel.class_cache.cache_warmer' => true,
            'knp_menu.listener.voters' => true,
            'knp_menu.menu_provider' => true,
            'knp_menu.menu_provider.builder_alias' => true,
            'knp_menu.menu_provider.lazy' => true,
            'knp_menu.renderer.list' => true,
            'knp_menu.renderer.twig' => true,
            'knp_menu.renderer_provider' => true,
            'knp_menu.voter.router' => true,
            'lexik_currency.adapter_collector' => true,
            'lexik_currency.adapter_factory' => true,
            'lexik_currency.converter' => true,
            'lexik_currency.currency_extension' => true,
            'lexik_currency.doctrine_adapter' => true,
            'lexik_currency.ecb_adapter' => true,
            'lexik_currency.formatter' => true,
            'lexik_currency.oer_adapter' => true,
            'lexik_currency.subscriber.locale' => true,
            'lexik_currency.yahoo_adapter' => true,
            'liip_imagine' => true,
            'liip_imagine.binary.loader.default' => true,
            'liip_imagine.binary.loader.prototype.filesystem' => true,
            'liip_imagine.binary.loader.prototype.stream' => true,
            'liip_imagine.binary.mime_type_guesser' => true,
            'liip_imagine.cache.manager' => true,
            'liip_imagine.cache.signer' => true,
            'liip_imagine.controller' => true,
            'liip_imagine.data.manager' => true,
            'liip_imagine.extension_guesser' => true,
            'liip_imagine.filter.configuration' => true,
            'liip_imagine.filter.loader.auto_rotate' => true,
            'liip_imagine.filter.loader.background' => true,
            'liip_imagine.filter.loader.crop' => true,
            'liip_imagine.filter.loader.downscale' => true,
            'liip_imagine.filter.loader.interlace' => true,
            'liip_imagine.filter.loader.paste' => true,
            'liip_imagine.filter.loader.relative_resize' => true,
            'liip_imagine.filter.loader.resize' => true,
            'liip_imagine.filter.loader.rotate' => true,
            'liip_imagine.filter.loader.strip' => true,
            'liip_imagine.filter.loader.thumbnail' => true,
            'liip_imagine.filter.loader.upscale' => true,
            'liip_imagine.filter.loader.watermark' => true,
            'liip_imagine.filter.manager' => true,
            'liip_imagine.filter.post_processor.jpegoptim' => true,
            'liip_imagine.filter.post_processor.optipng' => true,
            'liip_imagine.form.type.image' => true,
            'liip_imagine.mime_type_guesser' => true,
            'liip_imagine.templating.helper' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.activation_strategy.not_found' => true,
            'monolog.handler.console' => true,
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => true,
            'monolog.handler.main' => true,
            'monolog.handler.null_internal' => true,
            'monolog.logger.assetic' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.profiler' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.logger.templating' => true,
            'monolog.logger.translation' => true,
            'monolog.processor.psr_log_message' => true,
            'oneup_uploader.chunk_manager' => true,
            'oneup_uploader.chunks_storage' => true,
            'oneup_uploader.controller.listing_images' => true,
            'oneup_uploader.controller.user_images' => true,
            'oneup_uploader.error_handler.blueimp' => true,
            'oneup_uploader.namer.uniqid' => true,
            'oneup_uploader.namer.urlsafe' => true,
            'oneup_uploader.orphanage_manager' => true,
            'oneup_uploader.routing.loader' => true,
            'oneup_uploader.storage.listing_images' => true,
            'oneup_uploader.storage.user_images' => true,
            'oneup_uploader.templating.uploader_helper' => true,
            'oneup_uploader.validation_listener.allowed_mimetype' => true,
            'oneup_uploader.validation_listener.disallowed_mimetype' => true,
            'oneup_uploader.validation_listener.max_size' => true,
            'profiler_listener' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'security.access.authenticated_voter' => true,
            'security.access.booking_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.listing_image_voter' => true,
            'security.access.listing_voter' => true,
            'security.access.review_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.access.user_image_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.admin' => true,
            'security.authentication.listener.anonymous.main' => true,
            'security.authentication.listener.form.admin' => true,
            'security.authentication.listener.form.main' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.admin' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.dao.admin' => true,
            'security.authentication.provider.dao.main' => true,
            'security.authentication.session_strategy' => true,
            'security.authentication.switchuser_listener.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.context_listener.1' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.admin' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.main' => true,
            'security.http_utils' => true,
            'security.logout.handler.session' => true,
            'security.logout_listener.admin' => true,
            'security.logout_listener.main' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.atg4mne' => true,
            'security.request_matcher.hwsmhqp' => true,
            'security.request_matcher.zfhj2lw' => true,
            'security.role_hierarchy' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'service_locator.sr6ctxe' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'simplethings_entityaudit.config' => true,
            'simplethings_entityaudit.create_schema_listener' => true,
            'simplethings_entityaudit.log_revisions_listener' => true,
            'simplethings_entityaudit.manager' => true,
            'simplethings_entityaudit.reader' => true,
            'simplethings_entityaudit.username_callable.token_storage' => true,
            'sonata.admin.audit.orm.reader' => true,
            'sonata.admin.booking' => true,
            'sonata.admin.booking_bank_wire' => true,
            'sonata.admin.booking_payin_refund' => true,
            'sonata.admin.booking_user_address' => true,
            'sonata.admin.builder.orm_datagrid' => true,
            'sonata.admin.builder.orm_form' => true,
            'sonata.admin.builder.orm_list' => true,
            'sonata.admin.builder.orm_show' => true,
            'sonata.admin.contact' => true,
            'sonata.admin.footer' => true,
            'sonata.admin.guesser.orm_datagrid' => true,
            'sonata.admin.guesser.orm_datagrid_chain' => true,
            'sonata.admin.guesser.orm_list' => true,
            'sonata.admin.guesser.orm_list_chain' => true,
            'sonata.admin.guesser.orm_show' => true,
            'sonata.admin.guesser.orm_show_chain' => true,
            'sonata.admin.listing' => true,
            'sonata.admin.listing_category' => true,
            'sonata.admin.listing_characteristic' => true,
            'sonata.admin.listing_characteristic_group' => true,
            'sonata.admin.listing_characteristic_type' => true,
            'sonata.admin.listing_characteristic_value' => true,
            'sonata.admin.manager.orm' => true,
            'sonata.admin.manipulator.acl.object.orm' => true,
            'sonata.admin.menu.group_provider' => true,
            'sonata.admin.message' => true,
            'sonata.admin.orm.filter.type.boolean' => true,
            'sonata.admin.orm.filter.type.callback' => true,
            'sonata.admin.orm.filter.type.choice' => true,
            'sonata.admin.orm.filter.type.class' => true,
            'sonata.admin.orm.filter.type.date' => true,
            'sonata.admin.orm.filter.type.date_range' => true,
            'sonata.admin.orm.filter.type.datetime' => true,
            'sonata.admin.orm.filter.type.datetime_range' => true,
            'sonata.admin.orm.filter.type.model' => true,
            'sonata.admin.orm.filter.type.model_autocomplete' => true,
            'sonata.admin.orm.filter.type.number' => true,
            'sonata.admin.orm.filter.type.string' => true,
            'sonata.admin.orm.filter.type.time' => true,
            'sonata.admin.page' => true,
            'sonata.admin.parameter' => true,
            'sonata.admin.review' => true,
            'sonata.admin.security.handler' => true,
            'sonata.admin.thread' => true,
            'sonata.admin.user_address' => true,
            'sonata.admin_doctrine_orm.block.audit' => true,
            'sonata.block.cache.handler.default' => true,
            'sonata.block.cache.handler.noop' => true,
            'sonata.block.context_manager.default' => true,
            'sonata.block.exception.filter.debug_only' => true,
            'sonata.block.exception.filter.ignore_block_exception' => true,
            'sonata.block.exception.filter.keep_all' => true,
            'sonata.block.exception.filter.keep_none' => true,
            'sonata.block.exception.renderer.inline' => true,
            'sonata.block.exception.renderer.inline_debug' => true,
            'sonata.block.exception.renderer.throw' => true,
            'sonata.block.exception.strategy.manager' => true,
            'sonata.block.form.type.block' => true,
            'sonata.block.form.type.container_template' => true,
            'sonata.block.loader.chain' => true,
            'sonata.block.loader.service' => true,
            'sonata.block.manager' => true,
            'sonata.block.menu.registry' => true,
            'sonata.block.renderer.default' => true,
            'sonata.block.service.container' => true,
            'sonata.block.service.empty' => true,
            'sonata.block.service.menu' => true,
            'sonata.block.service.rss' => true,
            'sonata.block.service.template' => true,
            'sonata.block.service.text' => true,
            'sonata.block.templating.helper' => true,
            'sonata.block.twig.global' => true,
            'sonata.core.date.moment_format_converter' => true,
            'sonata.core.form.type.array' => true,
            'sonata.core.form.type.boolean' => true,
            'sonata.core.form.type.collection' => true,
            'sonata.core.form.type.color' => true,
            'sonata.core.form.type.color_selector' => true,
            'sonata.core.form.type.date_picker' => true,
            'sonata.core.form.type.date_range' => true,
            'sonata.core.form.type.date_range_picker' => true,
            'sonata.core.form.type.datetime_picker' => true,
            'sonata.core.form.type.datetime_range' => true,
            'sonata.core.form.type.datetime_range_picker' => true,
            'sonata.core.form.type.equal' => true,
            'sonata.core.form.type.translatable_choice' => true,
            'sonata.core.slugify.cocur' => true,
            'sonata.core.slugify.native' => true,
            'sonata.core.twig.extension.text' => true,
            'sonata.core.twig.extension.wrapping' => true,
            'sonata.core.twig.status_extension' => true,
            'sonata.core.twig.template_extension' => true,
            'sonata.core.validator.inline' => true,
            'sonata.easy_extends.doctrine.mapper' => true,
            'sonata.easy_extends.generator.bundle' => true,
            'sonata.easy_extends.generator.odm' => true,
            'sonata.easy_extends.generator.orm' => true,
            'sonata.easy_extends.generator.phpcr' => true,
            'sonata.easy_extends.generator.serializer' => true,
            'sonata.user.editable_role_builder' => true,
            'sonata.user.form.gender_list' => true,
            'sonata.user.form.type.security_roles' => true,
            'sonata.user.group_manager' => true,
            'sonata.user.manager.user' => true,
            'sonata.user.twig.global' => true,
            'sonata.user.user_manager' => true,
            'stof_doctrine_extensions.uploadable.manager' => true,
            'streamed_response_listener' => true,
            'swiftmailer.command.debug' => true,
            'swiftmailer.command.new_email' => true,
            'swiftmailer.command.send_email' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.finder' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yaml' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.extension.fm_elfinder_init' => true,
            'twig.extension.intl' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.text_extension' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'validator.validator_factory' => true,
            'var_dumper.cli_dumper' => true,
            'web_profiler.csp.handler' => true,
            'web_profiler.debug_toolbar' => true,
            'white_october_breadcrumbs' => true,
            'white_october_breadcrumbs.helper' => true,
            'white_october_breadcrumbs.twig' => true,
        );
        $this->aliases = array(
            'a2lix_translation_form.default.service.locale_provider' => 'a2lix_translation_form.default.service.parameter_locale_provider',
            'a2lix_translation_form.manager_registry' => 'doctrine',
            'bazinga_geocoder.geocoder' => 'Geocoder\\ProviderAggregator',
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'doctrine_migrations.diff_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'doctrine_migrations.execute_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'doctrine_migrations.generate_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'doctrine_migrations.latest_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'doctrine_migrations.migrate_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'doctrine_migrations.status_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'doctrine_migrations.version_command',
            'console.command.doctrine_bundle_mongodbbundle_command_clearmetadatacachedoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_createschemadoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\CreateSchemaDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_dropschemadoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\DropSchemaDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_generatedocumentsdoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateDocumentsDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_generatehydratorsdoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateHydratorsDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_generateproxiesdoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\GenerateProxiesDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_infodoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\InfoDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_loaddatafixturesdoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_querydoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\QueryDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_sharddoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_tailcursordoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand',
            'console.command.doctrine_bundle_mongodbbundle_command_updateschemadoctrineodmcommand' => 'Doctrine\\Bundle\\MongoDBBundle\\Command\\UpdateSchemaDoctrineODMCommand',
            'console.command.ivory_ckeditorbundle_command_ckeditorinstallercommand' => 'ivory_ck_editor.command.installer',
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'console.command.sonata_blockbundle_command_debugblockscommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
            'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' => 'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
            'console.command.sonata_corebundle_command_sonatalistformmappingcommand' => 'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.odm.mongodb.document_manager' => 'doctrine_mongodb.odm.default_document_manager',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'doctrine_mongodb.odm.cache' => 'doctrine_mongodb.odm.cache.array',
            'doctrine_mongodb.odm.document_manager' => 'doctrine_mongodb.odm.default_document_manager',
            'doctrine_mongodb.odm.metadata.annotation_reader' => 'annotation_reader',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fm_elfinder.configurator' => 'fm_elfinder.configurator.default',
            'fm_elfinder.loader' => 'fm_elfinder.loader.default',
            'fos_message.search_finder' => 'fos_message.search_finder.default',
            'fos_message.search_query_factory' => 'fos_message.search_query_factory.default',
            'fos_user.mailer' => 'cocorico_user.mailer.twig_swift',
            'fos_user.user_manager' => 'cocorico_user.user_manager',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'geocoder' => 'Geocoder\\ProviderAggregator',
            'hwi_oauth.account.connector' => 'cocorico_user.oauth.user.provider.entity',
            'hwi_oauth.user.provider.entity.main' => 'cocorico_user.oauth.user.provider.entity',
            'lexik_currency.default_adapter' => 'lexik_currency.doctrine_adapter',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'simplethings_entityaudit.username_callable' => 'simplethings_entityaudit.username_callable.token_storage',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );

        include_once $this->targetDirs[0].'/jms_diextra/doctrine/EntityManager_5cf8f83b018c1.php';
    }

    public function getRemovedIds()
    {
        return require __DIR__.'/removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $file;
    }

protected function createProxy($class, \Closure $factory)
{
    class_exists($class, false) || $this->load(__DIR__."/{$class}.php");

        return $factory();
}

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('Vebp3XMCR1', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('NNE0UGb6ZI', 0, 'GYnxmmE80WDkhNEZldhgSb', ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->getMonolog_Logger_DoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Gedmo\Tree\TreeListener();
        $c->setAnnotationReader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});

        $d = new \Cocorico\CoreBundle\Listener\ResolveTargetEntityListener();
        $d->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\ListingOptionInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\BookingOptionInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\ListingCategoryFieldInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\ListingCategoryFieldValueInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\ListingCategoryListingCategoryFieldInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\BookingDepositRefundInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\UserBundle\\Model\\ListingAlertInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\UserBundle\\Model\\BookingDepositRefundAsAskerInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\UserBundle\\Model\\BookingDepositRefundAsOffererInterface', 'none', array());
        $d->addResolveTargetEntity('Cocorico\\UserBundle\\Model\\UserCardInterface', 'none', array());

        $e = new \Knp\DoctrineBehaviors\Reflection\ClassAnalyzer();

        $f = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $f->addEventSubscriber($c);
        $f->addEventSubscriber(${($_ = isset($this->services['sonata.easy_extends.doctrine.mapper']) ? $this->services['sonata.easy_extends.doctrine.mapper'] : $this->getSonata_EasyExtends_Doctrine_MapperService()) && false ?: '_'});
        $f->addEventSubscriber($d);
        $f->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Sluggable\SluggableSubscriber($e, true, 'Knp\\DoctrineBehaviors\\Model\\Sluggable\\Sluggable'));
        $f->addEventSubscriber(${($_ = isset($this->services['cocorico_user.user_entity_listener']) ? $this->services['cocorico_user.user_entity_listener'] : $this->getCocoricoUser_UserEntityListenerService()) && false ?: '_'});
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Loggable\LoggableSubscriber($e, true, new \Knp\DoctrineBehaviors\ORM\Loggable\LoggerCallable(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'})));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Translatable\TranslatableSubscriber($e, new \Knp\DoctrineBehaviors\ORM\Translatable\CurrentLocaleCallable($this), new \Knp\DoctrineBehaviors\ORM\Translatable\DefaultLocaleCallable('fr'), 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable', 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation', 'EAGER', 'EAGER'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Sortable\SortableSubscriber($e, true, 'Knp\\DoctrineBehaviors\\Model\\Sortable\\Sortable'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Blameable\BlameableSubscriber($e, true, 'Knp\\DoctrineBehaviors\\Model\\Blameable\\Blameable', new \Knp\DoctrineBehaviors\ORM\Blameable\UserCallable($this), NULL));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Tree\TreeSubscriber($e, true, 'Knp\\DoctrineBehaviors\\Model\\Tree\\Node'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Timestampable\TimestampableSubscriber($e, true, 'Knp\\DoctrineBehaviors\\Model\\Timestampable\\Timestampable', 'datetime'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\SoftDeletable\SoftDeletableSubscriber($e, true, 'Knp\\DoctrineBehaviors\\Model\\SoftDeletable\\SoftDeletable'));
        $f->addEventSubscriber(${($_ = isset($this->services['simplethings_entityaudit.log_revisions_listener']) ? $this->services['simplethings_entityaudit.log_revisions_listener'] : $this->getSimplethingsEntityaudit_LogRevisionsListenerService()) && false ?: '_'});
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Geocodable\GeocodableSubscriber($e, true, 'Knp\\DoctrineBehaviors\\Model\\Geocodable\\Geocodable', NULL));
        $f->addEventSubscriber(${($_ = isset($this->services['simplethings_entityaudit.create_schema_listener']) ? $this->services['simplethings_entityaudit.create_schema_listener'] : $this->getSimplethingsEntityaudit_CreateSchemaListenerService()) && false ?: '_'});
        $f->addEventSubscriber(${($_ = isset($this->services['cocorico.booking_user_address_entity_listener']) ? $this->services['cocorico.booking_user_address_entity_listener'] : $this->getCocorico_BookingUserAddressEntityListenerService()) && false ?: '_'});
        $f->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener()) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->getDoctrine_Dbal_ConnectionFactoryService()) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => 3306, 'dbname' => 'costocking_dev', 'user' => 'cocorico', 'password' => 'cocorico', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $f, array());
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        $this->services['doctrine.orm.default_entity_listener_resolver'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);

        $a = ${($_ = isset($this->services['cocorico.review.listener']) ? $this->services['cocorico.review.listener'] : $this->services['cocorico.review.listener'] = new \Cocorico\ReviewBundle\Entity\Listener\ReviewListener()) && false ?: '_'};

        $instance->register($a);
        $instance->register($a);

        return $instance;
    }

    /**
     * Gets the public 'doctrine_mongodb' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ManagerRegistry
     */
    protected function getDoctrineMongodbService()
    {
        return $this->services['doctrine_mongodb'] = new \Doctrine\Bundle\MongoDBBundle\ManagerRegistry('MongoDB', $this->parameters['doctrine_mongodb.odm.connections'], $this->parameters['doctrine_mongodb.odm.document_managers'], 'default', 'default', 'Doctrine\\ODM\\MongoDB\\Proxy\\Proxy', $this);
    }

    /**
     * Gets the public 'doctrine_mongodb.odm.default_connection' shared service.
     *
     * @return \Doctrine\MongoDB\Connection
     */
    protected function getDoctrineMongodb_Odm_DefaultConnectionService()
    {
        return $this->services['doctrine_mongodb.odm.default_connection'] = new \Doctrine\MongoDB\Connection('mongodb://localhost:27017', array(), ${($_ = isset($this->services['doctrine_mongodb.odm.default_configuration']) ? $this->services['doctrine_mongodb.odm.default_configuration'] : $this->getDoctrineMongodb_Odm_DefaultConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine_mongodb.odm.event_manager']) ? $this->services['doctrine_mongodb.odm.event_manager'] : $this->services['doctrine_mongodb.odm.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this)) && false ?: '_'}, array());
    }

    /**
     * Gets the public 'doctrine_mongodb.odm.default_document_manager' shared service.
     *
     * @return \Doctrine\ODM\MongoDB\DocumentManager
     */
    protected function getDoctrineMongodb_Odm_DefaultDocumentManagerService()
    {
        $this->services['doctrine_mongodb.odm.default_document_manager'] = $instance = \Doctrine\ODM\MongoDB\DocumentManager::create(${($_ = isset($this->services['doctrine_mongodb.odm.default_connection']) ? $this->services['doctrine_mongodb.odm.default_connection'] : $this->getDoctrineMongodb_Odm_DefaultConnectionService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine_mongodb.odm.default_configuration']) ? $this->services['doctrine_mongodb.odm.default_configuration'] : $this->getDoctrineMongodb_Odm_DefaultConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine_mongodb.odm.event_manager']) ? $this->services['doctrine_mongodb.odm.event_manager'] : $this->services['doctrine_mongodb.odm.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this)) && false ?: '_'});

        ${($_ = isset($this->services['doctrine_mongodb.odm.default_manager_configurator']) ? $this->services['doctrine_mongodb.odm.default_manager_configurator'] : $this->services['doctrine_mongodb.odm.default_manager_configurator'] = new \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator(array())) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_i18n_routing.cookie_setting_listener' shared service.
     *
     * @return \JMS\I18nRoutingBundle\EventListener\CookieSettingListener
     */
    protected function getJmsI18nRouting_CookieSettingListenerService()
    {
        return $this->services['jms_i18n_routing.cookie_setting_listener'] = new \JMS\I18nRoutingBundle\EventListener\CookieSettingListener('hl', 31536000, NULL, NULL, false, false);
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['sonata.admin.menu.matcher.voter.admin']) ? $this->services['sonata.admin.menu.matcher.voter.admin'] : $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['sonata.admin.menu.matcher.voter.active']) ? $this->services['sonata.admin.menu.matcher.voter.active'] : $this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->load(__DIR__.'/getKnpMenu_Voter_RouterService.php')) && false ?: '_'};
        }, 3));
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, '/cocorico/app/../web', 'media/cache');
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'oneup_uploader.twig.extension.uploader' shared service.
     *
     * @return \Oneup\UploaderBundle\Twig\Extension\UploaderExtension
     */
    protected function getOneupUploader_Twig_Extension_UploaderService()
    {
        return $this->services['oneup_uploader.twig.extension.uploader'] = new \Oneup\UploaderBundle\Twig\Extension\UploaderExtension(${($_ = isset($this->services['oneup_uploader.templating.uploader_helper']) ? $this->services['oneup_uploader.templating.uploader_helper'] : $this->getOneupUploader_Templating_UploaderHelperService()) && false ?: '_'});
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->getMonolog_Logger_ProfilerService()) && false ?: '_'};

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

        $e = new \Bazinga\GeocoderBundle\DataCollector\GeocoderDataCollector();
        $e->addInstance(${($_ = isset($this->services['bazinga_geocoder.provider.google_maps.profiler']) ? $this->services['bazinga_geocoder.provider.google_maps.profiler'] : $this->services['bazinga_geocoder.provider.google_maps.profiler'] = new \Bazinga\GeocoderBundle\Plugin\ProfilingPlugin('google_maps')) && false ?: '_'});

        $f = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $f->setKernel($b);
        }

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'});
        $instance->add($c);
        $instance->add(${($_ = isset($this->services['data_collector.translation']) ? $this->services['data_collector.translation'] : $this->getDataCollector_TranslationService()) && false ?: '_'});
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->getDataCollector_DumpService()) && false ?: '_'});
        $instance->add(${($_ = isset($this->services['doctrine_mongodb.odm.data_collector.pretty']) ? $this->services['doctrine_mongodb.odm.data_collector.pretty'] : $this->getDoctrineMongodb_Odm_DataCollector_PrettyService()) && false ?: '_'});
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector(${($_ = isset($this->services['sonata.block.templating.helper']) ? $this->services['sonata.block.templating.helper'] : $this->getSonata_Block_Templating_HelperService()) && false ?: '_'}, $this->parameters['sonata.block.container.types']));
        $instance->add($e);
        $instance->add($f);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->getSession_Storage_NativeService()) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_AdminService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter();
    }

    /**
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Costocking.com administration', '/images/logo2.gif', array('html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'javascripts' => array(0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 4 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js'), 'stylesheets' => array(0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css'), 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN'), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'});

        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setAdminServiceIds(array(0 => 'sonata.admin.listing', 1 => 'sonata.admin.booking', 2 => 'sonata.admin.listing_characteristic', 3 => 'sonata.admin.listing_characteristic_group', 4 => 'sonata.admin.listing_characteristic_type', 5 => 'sonata.admin.listing_characteristic_value', 6 => 'sonata.admin.listing_category', 7 => 'sonata.admin.booking_bank_wire', 8 => 'sonata.admin.booking_payin_refund', 9 => 'sonata.admin.booking_user_address', 10 => 'sonata.admin.user_address', 11 => 'sonata.user.admin.user', 12 => 'sonata.admin.page', 13 => 'sonata.admin.footer', 14 => 'sonata.admin.thread', 15 => 'sonata.admin.message', 16 => 'sonata.admin.contact', 17 => 'sonata.admin.review', 18 => 'sonata.admin.parameter'));
        $instance->setAdminGroups(array('Listings' => array('label' => 'Listings', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'sonata.admin.listing', 'label' => 'Listings', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'sonata.admin.listing_characteristic', 'label' => 'Characteristic', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 2 => array('admin' => 'sonata.admin.listing_characteristic_group', 'label' => 'Characteristic Group', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 3 => array('admin' => 'sonata.admin.listing_characteristic_type', 'label' => 'Characteristic Type', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 4 => array('admin' => 'sonata.admin.listing_category', 'label' => 'Category', 'route' => '', 'route_params' => array(), 'route_absolute' => false))), 'Bookings' => array('label' => 'Bookings', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'sonata.admin.booking', 'label' => 'Bookings', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'sonata.admin.booking_bank_wire', 'label' => 'Bank Wires', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 2 => array('admin' => 'sonata.admin.booking_payin_refund', 'label' => 'Payin Refunds', 'route' => '', 'route_params' => array(), 'route_absolute' => false))), 'Users' => array('label' => 'Users', 'label_catalogue' => 'SonataUserBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'sonata.user.admin.user', 'label' => 'Users', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'sonata.admin.thread', 'label' => 'Messages', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 2 => array('admin' => 'sonata.admin.review', 'label' => 'Reviews', 'route' => '', 'route_params' => array(), 'route_absolute' => false))), 'Site' => array('label' => 'Site', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'on_top' => false, 'keep_open' => false, 'items' => array(0 => array('admin' => 'sonata.admin.page', 'label' => 'Pages', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 1 => array('admin' => 'sonata.admin.footer', 'label' => 'Footers', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 2 => array('admin' => 'sonata.admin.contact', 'label' => 'Contact', 'route' => '', 'route_params' => array(), 'route_absolute' => false), 3 => array('admin' => 'sonata.admin.parameter', 'label' => 'Configuration', 'route' => '', 'route_params' => array(), 'route_absolute' => false)))));
        $instance->setAdminClasses(array('Cocorico\\CoreBundle\\Entity\\Listing' => array(0 => 'sonata.admin.listing'), 'Cocorico\\CoreBundle\\Entity\\Booking' => array(0 => 'sonata.admin.booking'), 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristic' => array(0 => 'sonata.admin.listing_characteristic'), 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicGroup' => array(0 => 'sonata.admin.listing_characteristic_group'), 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicType' => array(0 => 'sonata.admin.listing_characteristic_type'), 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicValue' => array(0 => 'sonata.admin.listing_characteristic_value'), 'Cocorico\\CoreBundle\\Entity\\ListingCategory' => array(0 => 'sonata.admin.listing_category'), 'Cocorico\\CoreBundle\\Entity\\BookingBankWire' => array(0 => 'sonata.admin.booking_bank_wire'), 'Cocorico\\CoreBundle\\Entity\\BookingPayinRefund' => array(0 => 'sonata.admin.booking_payin_refund'), 'Cocorico\\CoreBundle\\Entity\\BookingUserAddress' => array(0 => 'sonata.admin.booking_user_address'), 'Cocorico\\UserBundle\\Entity\\UserAddress' => array(0 => 'sonata.admin.user_address'), 'Cocorico\\UserBundle\\Entity\\User' => array(0 => 'sonata.user.admin.user'), 'Cocorico\\PageBundle\\Entity\\Page' => array(0 => 'sonata.admin.page'), 'Cocorico\\CMSBundle\\Entity\\Footer' => array(0 => 'sonata.admin.footer'), 'Cocorico\\MessageBundle\\Entity\\Thread' => array(0 => 'sonata.admin.thread'), 'Cocorico\\MessageBundle\\Entity\\Message' => array(0 => 'sonata.admin.message'), 'Cocorico\\ContactBundle\\Entity\\Contact' => array(0 => 'sonata.admin.contact'), 'Cocorico\\ReviewBundle\\Entity\\Review' => array(0 => 'sonata.admin.review'), 'Cocorico\\ConfigBundle\\Entity\\Parameter' => array(0 => 'sonata.admin.parameter')));

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});

        $instance->setXEditableTypeMapping($this->parameters['sonata.admin.twig.extension.x_editable_type_mapping']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.flashmessage.manager' shared service.
     *
     * @return \Sonata\CoreBundle\FlashMessage\FlashManager
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'danger' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'danger' => 'danger'));
    }

    /**
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension(${($_ = isset($this->services['sonata.core.flashmessage.manager']) ? $this->services['sonata.core.flashmessage.manager'] : $this->getSonata_Core_Flashmessage_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.core.model.adapter.chain' shared service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the public 'sonata.user.admin.user' service.
     *
     * @return \Cocorico\UserBundle\Admin\UserAdmin
     */
    protected function getSonata_User_Admin_UserService()
    {
        $instance = new \Cocorico\UserBundle\Admin\UserAdmin('sonata.user.admin.user', 'Cocorico\\UserBundle\\Entity\\User', 'CocoricoUserBundle:Admin\\UserAdmin');

        $instance->setUserManager(${($_ = isset($this->services['cocorico_user.user_manager']) ? $this->services['cocorico_user.user_manager'] : $this->load(__DIR__.'/getCocoricoUser_UserManagerService.php')) && false ?: '_'});
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setBundlesEnabled($this->parameters['kernel.bundles']);
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Users');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->getMonolog_Logger_TranslationService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, array('form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'SonataUserBundle:Form:form_admin_fields.html.twig', 2 => 'CocoricoCoreBundle:Form:fields.html.twig', 3 => 'CocoricoCoreBundle:Form:fields_collection.html.twig', 4 => 'CocoricoCoreBundle:Form:fields_category.html.twig', 5 => 'CocoricoCoreBundle:Form:fields_price.html.twig', 6 => 'SonataCoreBundle:Form:datepicker.html.twig', 7 => 'CocoricoTimeBundle:Form:fields_date_time.html.twig'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => '/cocorico/templates', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};
        $d = ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->getKnpMenu_MatcherService()) && false ?: '_'};

        $e = new \Cocorico\CoreBundle\Twig\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
        $e->setCheckTranslation(false);

        $f = new \Knp\Menu\Util\MenuManipulator();

        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $g->setDisplayOptions(array('fileLinkFormat' => $b));

        $h = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $h->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $i = new \Symfony\Bridge\Twig\AppVariable();
        $i->setEnvironment('dev');
        $i->setDebug(true);
        if ($this->has('security.token_storage')) {
            $i->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $i->setRequestStack($c);
        }

        $instance->addExtension(${($_ = isset($this->services['twig.text_extension']) ? $this->services['twig.text_extension'] : $this->services['twig.text_extension'] = new \Twig_Extensions_Extension_Text()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['twig.extension.intl']) ? $this->services['twig.extension.intl'] : $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['cocorico.twig.core_extension']) ? $this->services['cocorico.twig.core_extension'] : $this->getCocorico_Twig_CoreExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['lexik_currency.currency_extension']) ? $this->services['lexik_currency.currency_extension'] : $this->services['lexik_currency.currency_extension'] = new \Lexik\Bundle\CurrencyBundle\Twig\Extension\CurrencyExtension($this)) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['cocorico.twig.language_extension']) ? $this->services['cocorico.twig.language_extension'] : $this->services['cocorico.twig.language_extension'] = new \Cocorico\CoreBundle\Twig\LanguageExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['cocorico.twig.country_extension']) ? $this->services['cocorico.twig.country_extension'] : $this->services['cocorico.twig.country_extension'] = new \Cocorico\CoreBundle\Twig\CountryExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['cocorico.twig.extra_bundle_extension']) ? $this->services['cocorico.twig.extra_bundle_extension'] : $this->getCocorico_Twig_ExtraBundleExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, $a));
        $instance->addExtension($e);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, '/cocorico/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, false, array(), $this->parameters['assetic.bundles'], new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(${($_ = isset($this->services['jms_translation.twig_extension']) ? $this->services['jms_translation.twig_extension'] : $this->getJmsTranslation_TwigExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.twig.extension']) ? $this->services['sonata.admin.twig.extension'] : $this->getSonata_Admin_Twig_ExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.flashmessage.twig.extension']) ? $this->services['sonata.core.flashmessage.twig.extension'] : $this->getSonata_Core_Flashmessage_Twig_ExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.extension.wrapping']) ? $this->services['sonata.core.twig.extension.wrapping'] : $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.extension.text']) ? $this->services['sonata.core.twig.extension.text'] : $this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.status_extension']) ? $this->services['sonata.core.twig.status_extension'] : $this->getSonata_Core_Twig_StatusExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.template_extension']) ? $this->services['sonata.core.twig.template_extension'] : $this->getSonata_Core_Twig_TemplateExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(${($_ = isset($this->services['sonata.block.templating.helper']) ? $this->services['sonata.block.templating.helper'] : $this->getSonata_Block_Templating_HelperService()) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['oneup_uploader.twig.extension.uploader']) ? $this->services['oneup_uploader.twig.extension.uploader'] : $this->getOneupUploader_Twig_Extension_UploaderService()) && false ?: '_'});
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension(${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->getLiipImagine_Cache_ManagerService()) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['fos_message.twig_extension']) ? $this->services['fos_message.twig_extension'] : $this->getFosMessage_TwigExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(${($_ = isset($this->services['knp_menu.renderer_provider']) ? $this->services['knp_menu.renderer_provider'] : $this->getKnpMenu_RendererProviderService()) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->getKnpMenu_MenuProviderService()) && false ?: '_'}, $f, $d), $d, $f));
        $instance->addExtension(${($_ = isset($this->services['white_october_breadcrumbs.twig']) ? $this->services['white_october_breadcrumbs.twig'] : $this->services['white_october_breadcrumbs.twig'] = new \WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension($this)) && false ?: '_'});
        $instance->addExtension(new \HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension(${($_ = isset($this->services['hwi_oauth.templating.helper.oauth']) ? $this->services['hwi_oauth.templating.helper.oauth'] : $this->getHwiOauth_Templating_Helper_OauthService()) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['ivory_ck_editor.twig_extension']) ? $this->services['ivory_ck_editor.twig_extension'] : $this->getIvoryCkEditor_TwigExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['twig.extension.fm_elfinder_init']) ? $this->services['twig.extension.fm_elfinder_init'] : $this->getTwig_Extension_FmElfinderInitService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['cocorico_geo.twig.cocorico_geo_extension']) ? $this->services['cocorico_geo.twig.cocorico_geo_extension'] : $this->services['cocorico_geo.twig.cocorico_geo_extension'] = new \Cocorico\GeoBundle\Twig\GeoExtension('AIzaSyAvng_eh8UKyAf4c_47EKdcWTj4jhvT-6U', NULL)) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['cocorico.star_rating.twig.extension']) ? $this->services['cocorico.star_rating.twig.extension'] : $this->services['cocorico.star_rating.twig.extension'] = new \Cocorico\ReviewBundle\Extension\StarRatingTwigExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['cocorico_time.twig.time_extension']) ? $this->services['cocorico_time.twig.time_extension'] : $this->services['cocorico_time.twig.time_extension'] = new \Cocorico\TimeBundle\Twig\TimeExtension(1440, true)) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['cocorico_time.twig.intl_extension']) ? $this->services['cocorico_time.twig.intl_extension'] : $this->services['cocorico_time.twig.intl_extension'] = new \Cocorico\TimeBundle\Twig\IntlExtension()) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->getVarDumper_ClonerService()) && false ?: '_'}, $g));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($h));
        $instance->addGlobal('app', $i);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load(__DIR__.'/getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load(__DIR__.'/getTwig_Form_RendererService.php')) && false ?: '_'};
        }))));
        $instance->addGlobal('cocorico_site_name', 'Costocking.com');
        $instance->addGlobal('cocorico_phone', '+33(0) 7 77 98 93 52');
        $instance->addGlobal('cocorico_address', NULL);
        $instance->addGlobal('cocorico_short_description', 'Costocking est la marketplace de services logistique');
        $instance->addGlobal('cocorico_contact_mail', 'contact@costocking.com');
        $instance->addGlobal('cocorico_contact_mail_obfuscated', '&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#099;&#111;&#099;&#111;&#114;&#105;&#099;&#111;&#046;&#105;&#111;');
        $instance->addGlobal('cocorico_from_email', 'no-reply@cocorico.io');
        $instance->addGlobal('cocorico_vat_number', 'FR 12 123 456 789');
        $instance->addGlobal('cocorico_facebook_id', 352775691816092);
        $instance->addGlobal('cocorico_google_analytics', 'UA');
        $instance->addGlobal('cocorico_google_tag_manager', false);
        $instance->addGlobal('cocorico_admin_translation', false);
        $instance->addGlobal('cocorico_listing_countries', array());
        $instance->addGlobal('listing_img_max', 24);
        $instance->addGlobal('listing_img_max_upload_size', 12);
        $instance->addGlobal('listing_img_xsmall_w', 90);
        $instance->addGlobal('listing_img_xsmall_h', 67);
        $instance->addGlobal('listing_img_small_w', 100);
        $instance->addGlobal('listing_img_small_h', 75);
        $instance->addGlobal('listing_img_xxmedium_w', 150);
        $instance->addGlobal('listing_img_xxmedium_h', 112);
        $instance->addGlobal('listing_img_xmedium_w', 200);
        $instance->addGlobal('listing_img_xmedium_h', 150);
        $instance->addGlobal('listing_img_medium_w', 275);
        $instance->addGlobal('listing_img_medium_h', 206);
        $instance->addGlobal('listing_img_large_w', 384);
        $instance->addGlobal('listing_img_large_h', 288);
        $instance->addGlobal('listing_new_map_w', 100);
        $instance->addGlobal('listing_new_map_h', 300);
        $instance->addGlobal('listing_edit_map_w', 100);
        $instance->addGlobal('listing_edit_map_h', 418);
        $instance->addGlobal('listing_show_map_w', 100);
        $instance->addGlobal('listing_show_map_h', 480);
        $instance->addGlobal('listing_search_map_w', '100%');
        $instance->addGlobal('listing_search_map_h', 1000);
        $instance->addGlobal('upload_image_w', 120);
        $instance->addGlobal('upload_image_h', 90);
        $instance->addGlobal('user_img_max', 6);
        $instance->addGlobal('user_img_max_upload_size', 12);
        $instance->addGlobal('sonata_admin', ${($_ = isset($this->services['sonata.admin.twig.global']) ? $this->services['sonata.admin.twig.global'] : $this->getSonata_Admin_Twig_GlobalService()) && false ?: '_'});
        $instance->addGlobal('sonata_block', ${($_ = isset($this->services['sonata.block.twig.global']) ? $this->services['sonata.block.twig.global'] : $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'))) && false ?: '_'});
        $instance->addGlobal('sonata_user', ${($_ = isset($this->services['sonata.user.twig.global']) ? $this->services['sonata.user.twig.global'] : $this->services['sonata.user.twig.global'] = new \Sonata\UserBundle\Twig\GlobalVariables($this)) && false ?: '_'});
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->getValidator_BuilderService()) && false ?: '_'}->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'assetic.asset_factory' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, $this, $this->getParameterBag(), '/cocorico/app/../web', true);
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\UrlPackage(array(0 => 'http://192.168.229.159'), new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), array());
    }

    /**
     * Gets the private 'bazinga_geocoder.provider.google_maps.profiler' shared service.
     *
     * @return \Bazinga\GeocoderBundle\Plugin\ProfilingPlugin
     */
    protected function getBazingaGeocoder_Provider_GoogleMaps_ProfilerService()
    {
        return $this->services['bazinga_geocoder.provider.google_maps.profiler'] = new \Bazinga\GeocoderBundle\Plugin\ProfilingPlugin('google_maps');
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('oZvkflFw9x', 0, 'GYnxmmE80WDkhNEZldhgSb', ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ZHZQcJMhe8', 0, 'GYnxmmE80WDkhNEZldhgSb', ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Hn03xYpmO-', 0, 'GYnxmmE80WDkhNEZldhgSb', ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cocorico.booking_user_address_entity_listener' shared service.
     *
     * @return \Cocorico\CoreBundle\Listener\BookingUserAddressEntityListener
     */
    protected function getCocorico_BookingUserAddressEntityListenerService()
    {
        return $this->services['cocorico.booking_user_address_entity_listener'] = new \Cocorico\CoreBundle\Listener\BookingUserAddressEntityListener(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cocorico.listing_availability_param_converter' shared service.
     *
     * @return \Cocorico\CoreBundle\Request\ListingAvailabilityParamConverter
     */
    protected function getCocorico_ListingAvailabilityParamConverterService()
    {
        return $this->services['cocorico.listing_availability_param_converter'] = new \Cocorico\CoreBundle\Request\ListingAvailabilityParamConverter(${($_ = isset($this->services['doctrine_mongodb.odm.default_document_manager']) ? $this->services['doctrine_mongodb.odm.default_document_manager'] : $this->getDoctrineMongodb_Odm_DefaultDocumentManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cocorico.listing_param_converter' shared service.
     *
     * @return \Cocorico\CoreBundle\Request\ListingParamConverter
     */
    protected function getCocorico_ListingParamConverterService()
    {
        return $this->services['cocorico.listing_param_converter'] = new \Cocorico\CoreBundle\Request\ListingParamConverter(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cocorico.review.listener' shared service.
     *
     * @return \Cocorico\ReviewBundle\Entity\Listener\ReviewListener
     */
    protected function getCocorico_Review_ListenerService()
    {
        return $this->services['cocorico.review.listener'] = new \Cocorico\ReviewBundle\Entity\Listener\ReviewListener();
    }

    /**
     * Gets the private 'cocorico.star_rating.twig.extension' shared service.
     *
     * @return \Cocorico\ReviewBundle\Extension\StarRatingTwigExtension
     */
    protected function getCocorico_StarRating_Twig_ExtensionService()
    {
        return $this->services['cocorico.star_rating.twig.extension'] = new \Cocorico\ReviewBundle\Extension\StarRatingTwigExtension();
    }

    /**
     * Gets the private 'cocorico.twig.core_extension' shared service.
     *
     * @return \Cocorico\CoreBundle\Twig\CoreExtension
     */
    protected function getCocorico_Twig_CoreExtensionService()
    {
        return $this->services['cocorico.twig.core_extension'] = new \Cocorico\CoreBundle\Twig\CoreExtension(${($_ = isset($this->services['lexik_currency.currency_extension']) ? $this->services['lexik_currency.currency_extension'] : $this->services['lexik_currency.currency_extension'] = new \Lexik\Bundle\CurrencyBundle\Twig\Extension\CurrencyExtension($this)) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, array('parameters' => array('cocorico_locales' => $this->parameters['cocorico.locales'], 'cocorico_time_unit' => 1440, 'cocorico_time_zone' => 'Europe/Paris', 'cocorico_time_unit_allday' => true, 'cocorico_time_unit_flexibility' => 0, 'cocorico_time_hours_available' => $this->parameters['cocorico.time_hours_available'], 'cocorico_days_display_mode' => 'range', 'cocorico_times_display_mode' => 'duration', 'cocorico_currencies' => $this->parameters['cocorico.currencies'], 'cocorico_currency' => 'EUR', 'cocorico_fee_as_offerer' => 0.05, 'cocorico_fee_as_asker' => 0.1, 'cocorico_listing_availability_status' => 1, 'cocorico_listing_price_precision' => 2, 'cocorico_listing_price_min' => 100, 'cocorico_listing_price_max' => 11000, 'cocorico_listing_map_display_marker' => false, 'cocorico_listing_search_min_result' => 0, 'cocorico_listing_duplication' => true, 'cocorico_booking_allow_single_day' => true, 'cocorico_booking_end_day_included' => true, 'cocorico_booking_expiration_delay' => 2880, 'cocorico_booking_acceptation_delay' => 240, 'cocorico_booking_validated_moment' => 'start', 'cocorico_booking_validated_delay' => 0, 'cocorico_booking_price_min' => 500, 'cocorico_booking_min_start_delay' => 0, 'cocorico_booking_min_start_time_delay' => 720, 'cocorico_vat' => 0.2, 'cocorico_include_vat' => false, 'cocorico_display_vat' => true, 'cocorico_user_address_delivery' => true)));
    }

    /**
     * Gets the private 'cocorico.twig.country_extension' shared service.
     *
     * @return \Cocorico\CoreBundle\Twig\CountryExtension
     */
    protected function getCocorico_Twig_CountryExtensionService()
    {
        return $this->services['cocorico.twig.country_extension'] = new \Cocorico\CoreBundle\Twig\CountryExtension();
    }

    /**
     * Gets the private 'cocorico.twig.extra_bundle_extension' shared service.
     *
     * @return \Cocorico\CoreBundle\Twig\ExtraBundleExtension
     */
    protected function getCocorico_Twig_ExtraBundleExtensionService()
    {
        return $this->services['cocorico.twig.extra_bundle_extension'] = new \Cocorico\CoreBundle\Twig\ExtraBundleExtension($this->parameters['kernel.bundles']);
    }

    /**
     * Gets the private 'cocorico.twig.language_extension' shared service.
     *
     * @return \Cocorico\CoreBundle\Twig\LanguageExtension
     */
    protected function getCocorico_Twig_LanguageExtensionService()
    {
        return $this->services['cocorico.twig.language_extension'] = new \Cocorico\CoreBundle\Twig\LanguageExtension();
    }

    /**
     * Gets the private 'cocorico_geo.twig.cocorico_geo_extension' shared service.
     *
     * @return \Cocorico\GeoBundle\Twig\GeoExtension
     */
    protected function getCocoricoGeo_Twig_CocoricoGeoExtensionService()
    {
        return $this->services['cocorico_geo.twig.cocorico_geo_extension'] = new \Cocorico\GeoBundle\Twig\GeoExtension('AIzaSyAvng_eh8UKyAf4c_47EKdcWTj4jhvT-6U', NULL);
    }

    /**
     * Gets the private 'cocorico_time.twig.intl_extension' shared service.
     *
     * @return \Cocorico\TimeBundle\Twig\IntlExtension
     */
    protected function getCocoricoTime_Twig_IntlExtensionService()
    {
        return $this->services['cocorico_time.twig.intl_extension'] = new \Cocorico\TimeBundle\Twig\IntlExtension();
    }

    /**
     * Gets the private 'cocorico_time.twig.time_extension' shared service.
     *
     * @return \Cocorico\TimeBundle\Twig\TimeExtension
     */
    protected function getCocoricoTime_Twig_TimeExtensionService()
    {
        return $this->services['cocorico_time.twig.time_extension'] = new \Cocorico\TimeBundle\Twig\TimeExtension(1440, true);
    }

    /**
     * Gets the private 'cocorico_user.user_entity_listener' shared service.
     *
     * @return \Cocorico\UserBundle\Listener\UserEntityListener
     */
    protected function getCocoricoUser_UserEntityListenerService()
    {
        return $this->services['cocorico_user.user_entity_listener'] = new \Cocorico\UserBundle\Listener\UserEntityListener(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, 'Europe/Paris');
    }

    /**
     * Gets the private 'cocorico_user.user_request.listener' shared service.
     *
     * @return \Cocorico\UserBundle\Listener\UserRequestListener
     */
    protected function getCocoricoUser_UserRequest_ListenerService()
    {
        return $this->services['cocorico_user.user_request.listener'] = new \Cocorico\UserBundle\Listener\UserRequestListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, 'Europe/Paris');
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : $this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : $this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor()) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'}, new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load(__DIR__.'/getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load(__DIR__.'/getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(${($_ = isset($this->services['jms_di_extra.controller_resolver']) ? $this->services['jms_di_extra.controller_resolver'] : $this->getJmsDiExtra_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('oneup_uploader.post_upload', array(0 => function () {
            return ${($_ = isset($this->services['cocorico.listing_image_upload_listener']) ? $this->services['cocorico.listing_image_upload_listener'] : $this->load(__DIR__.'/getCocorico_ListingImageUploadListenerService.php')) && false ?: '_'};
        }, 1 => 'onUpload'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['cocorico.listing_image_upload_validation_listener']) ? $this->services['cocorico.listing_image_upload_validation_listener'] : $this->services['cocorico.listing_image_upload_validation_listener'] = new \Cocorico\CoreBundle\Listener\ListingImageUploadValidationListener(12)) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['cocorico.ajax.authentication_listener']) ? $this->services['cocorico.ajax.authentication_listener'] : $this->services['cocorico.ajax.authentication_listener'] = new \Cocorico\CoreBundle\Listener\AjaxAuthenticationListener()) && false ?: '_'};
        }, 1 => 'onCoreException'), 1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['cocorico_user.user_request.listener']) ? $this->services['cocorico_user.user_request.listener'] : $this->getCocoricoUser_UserRequest_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('oneup_uploader.post_upload', array(0 => function () {
            return ${($_ = isset($this->services['cocorico_user.user_image_upload_listener']) ? $this->services['cocorico_user.user_image_upload_listener'] : $this->load(__DIR__.'/getCocoricoUser_UserImageUploadListenerService.php')) && false ?: '_'};
        }, 1 => 'onUpload'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['cocorico_user.listing_image_upload_validation_listener']) ? $this->services['cocorico_user.listing_image_upload_validation_listener'] : $this->services['cocorico_user.listing_image_upload_validation_listener'] = new \Cocorico\UserBundle\Listener\UserImageUploadValidationListener(12)) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['jms_i18n_routing.locale_choosing_listener']) ? $this->services['jms_i18n_routing.locale_choosing_listener'] : $this->load(__DIR__.'/getJmsI18nRouting_LocaleChoosingListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['jms_i18n_routing.cookie_setting_listener']) ? $this->services['jms_i18n_routing.cookie_setting_listener'] : $this->getJmsI18nRouting_CookieSettingListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 256);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.max_size']) ? $this->services['oneup_uploader.validation_listener.max_size'] : $this->services['oneup_uploader.validation_listener.max_size'] = new \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener()) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.allowed_mimetype']) ? $this->services['oneup_uploader.validation_listener.allowed_mimetype'] : $this->services['oneup_uploader.validation_listener.allowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener()) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.disallowed_mimetype']) ? $this->services['oneup_uploader.validation_listener.disallowed_mimetype'] : $this->services['oneup_uploader.validation_listener.disallowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener()) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['knp_menu.listener.voters']) ? $this->services['knp_menu.listener.voters'] : $this->getKnpMenu_Listener_VotersService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('cocorico.booking_new.submitted', array(0 => function () {
            return ${($_ = isset($this->services['cocorico.booking.subscriber']) ? $this->services['cocorico.booking.subscriber'] : $this->load(__DIR__.'/getCocorico_Booking_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'onBookingNewSubmitted'), 0);
        $instance->addListener('cocorico.booking.refund', array(0 => function () {
            return ${($_ = isset($this->services['cocorico.booking_payin_refund.subscriber']) ? $this->services['cocorico.booking_payin_refund.subscriber'] : $this->load(__DIR__.'/getCocorico_BookingPayinRefund_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'onBookingRefund'), 1);
        $instance->addListener('cocorico.booking.validate', array(0 => function () {
            return ${($_ = isset($this->services['cocorico.booking_validate.subscriber']) ? $this->services['cocorico.booking_validate.subscriber'] : $this->load(__DIR__.'/getCocorico_BookingValidate_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'onBookingValidate'), 1);
        $instance->addListener('cocorico.booking_bank_wire.check', array(0 => function () {
            return ${($_ = isset($this->services['cocorico.booking_bank_wire.subscriber']) ? $this->services['cocorico.booking_bank_wire.subscriber'] : $this->load(__DIR__.'/getCocorico_BookingBankWire_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'onBookingBankWireCheck'), 1);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ${($_ = isset($this->services['cocorico_user.authentication_subscriber']) ? $this->services['cocorico_user.authentication_subscriber'] : $this->load(__DIR__.'/getCocoricoUser_AuthenticationSubscriberService.php')) && false ?: '_'};
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load(__DIR__.'/getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load(__DIR__.'/getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load(__DIR__.'/getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ${($_ = isset($this->services['framework_extra_bundle.event.is_granted']) ? $this->services['framework_extra_bundle.event.is_granted'] : $this->getFrameworkExtraBundle_Event_IsGrantedService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('fos_user.security.implicit_login', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->load(__DIR__.'/getFosUser_Security_InteractiveLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onImplicitLogin'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->load(__DIR__.'/getFosUser_Security_InteractiveLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('fos_user.registration.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load(__DIR__.'/getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.registration.confirmed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load(__DIR__.'/getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.resetting.reset.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load(__DIR__.'/getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.change_password.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load(__DIR__.'/getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.create.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load(__DIR__.'/getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.delete.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load(__DIR__.'/getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load(__DIR__.'/getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.profile.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load(__DIR__.'/getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.registration.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load(__DIR__.'/getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.resetting.reset.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load(__DIR__.'/getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.resetting.reset.initialize', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load(__DIR__.'/getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetInitialize'), 0);
        $instance->addListener('fos_user.resetting.reset.success', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load(__DIR__.'/getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetSuccess'), 0);
        $instance->addListener('fos_user.resetting.reset.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load(__DIR__.'/getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['lexik_currency.subscriber.locale']) ? $this->services['lexik_currency.subscriber.locale'] : $this->getLexikCurrency_Subscriber_LocaleService()) && false ?: '_'};
        }, 1 => 'setCurrencyFormatterLocale'), 17);
        $instance->addListener('cocorico.booking_new.created', array(0 => function () {
            return ${($_ = isset($this->services['cocorico_message.booking.subscriber']) ? $this->services['cocorico_message.booking.subscriber'] : $this->load(__DIR__.'/getCocoricoMessage_Booking_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'onBookingNewCreated'), 1);
        $instance->addListener('cocorico_message.post_send', array(0 => function () {
            return ${($_ = isset($this->services['cocorico_message.message.subscriber']) ? $this->services['cocorico_message.message.subscriber'] : $this->load(__DIR__.'/getCocoricoMessage_Message_SubscriberService.php')) && false ?: '_'};
        }, 1 => 'onMessagePostSend'), 1);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->load(__DIR__.'/getDebug_DumpListenerService.php')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->getWebProfiler_DebugToolbarService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter('phpstorm://open?file=%f&line=%l', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, '/cocorico', '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load(__DIR__.'/getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->load(__DIR__.'/getSecurity_Access_RoleHierarchyVoterService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load(__DIR__.'/getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.access.listing_voter']) ? $this->services['security.access.listing_voter'] : $this->services['security.access.listing_voter'] = new \Cocorico\CoreBundle\Security\Voter\ListingVoter()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['security.access.listing_image_voter']) ? $this->services['security.access.listing_image_voter'] : $this->services['security.access.listing_image_voter'] = new \Cocorico\CoreBundle\Security\Voter\ListingImageVoter()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['security.access.booking_voter']) ? $this->services['security.access.booking_voter'] : $this->services['security.access.booking_voter'] = new \Cocorico\CoreBundle\Security\Voter\BookingVoter()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['security.access.user_image_voter']) ? $this->services['security.access.user_image_voter'] : $this->services['security.access.user_image_voter'] = new \Cocorico\UserBundle\Security\Voter\UserImageVoter()) && false ?: '_'};
            yield 7 => ${($_ = isset($this->services['cocorico_user.security.access.user_image_voter']) ? $this->services['cocorico_user.security.access.user_image_voter'] : $this->services['cocorico_user.security.access.user_image_voter'] = new \Cocorico\UserBundle\Security\Voter\UserImageVoter()) && false ?: '_'};
            yield 8 => ${($_ = isset($this->services['security.access.review_voter']) ? $this->services['security.access.review_voter'] : $this->services['security.access.review_voter'] = new \Cocorico\ReviewBundle\Security\Voter\ReviewVoter()) && false ?: '_'};
        }, 9), 'unanimous', false, true));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']);
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \EntityManager5cf8f83b018c1_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        include_once ($this->targetDirs[0].'/jms_diextra/doctrine/EntityManager_5cf8f83b018c1.php');

        return $this->services['doctrine.orm.default_entity_manager'] = new \EntityManager5cf8f83b018c1_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager.delegate']) ? $this->services['doctrine.orm.default_entity_manager.delegate'] : $this->getDoctrine_Orm_DefaultEntityManager_DelegateService()) && false ?: '_'}, $this);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.delegate' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManager_DelegateService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager.delegate'] = $this->createProxy('EntityManager_d6d6905', function () {
                return \EntityManager_d6d6905::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManager_DelegateService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => '/cocorico/vendor/gedmo/doctrine-extensions/lib/Gedmo/Tree/Entity', 1 => '/cocorico/src/Cocorico/CoreBundle/Entity', 2 => '/cocorico/src/Cocorico/GeoBundle/Entity', 3 => '/cocorico/src/Cocorico/UserBundle/Entity', 4 => '/cocorico/src/Cocorico/PageBundle/Entity', 5 => '/cocorico/src/Cocorico/CMSBundle/Entity', 6 => '/cocorico/src/Cocorico/MessageBundle/Entity', 7 => '/cocorico/src/Cocorico/ContactBundle/Entity', 8 => '/cocorico/src/Cocorico/ReviewBundle/Entity', 9 => '/cocorico/src/Cocorico/ConfigBundle/Entity'));

        $c = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('/cocorico/vendor/sonata-project/user-bundle/src/Resources/config/doctrine' => 'Sonata\\UserBundle\\Entity', '/cocorico/vendor/lexik/currency-bundle/Resources/config/doctrine' => 'Lexik\\Bundle\\CurrencyBundle\\Entity', '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/config/doctrine' => 'FOS\\MessageBundle\\Entity'));
        $c->setGlobalBasename('mapping');

        $d = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $d->addDriver($b, 'Gedmo\\Tree\\Entity');
        $d->addDriver($b, 'Cocorico\\CoreBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\GeoBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\UserBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\PageBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\CMSBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\MessageBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\ContactBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\ReviewBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\ConfigBundle\\Entity');
        $d->addDriver($c, 'Sonata\\UserBundle\\Entity');
        $d->addDriver($c, 'Lexik\\Bundle\\CurrencyBundle\\Entity');
        $d->addDriver($c, 'FOS\\MessageBundle\\Entity');
        $d->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/cocorico/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping' => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $e = new \Doctrine\ORM\Configuration();
        $e->setEntityNamespaces(array('GedmoTree' => 'Gedmo\\Tree\\Entity', 'SonataUserBundle' => 'Sonata\\UserBundle\\Entity', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\Entity', 'FOSMessageBundle' => 'FOS\\MessageBundle\\Entity', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\Entity', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\Entity', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\Entity', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\Entity', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\Entity', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\Entity', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\Entity', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\Entity', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\Entity'));
        $e->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()) && false ?: '_'});
        $e->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()) && false ?: '_'});
        $e->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()) && false ?: '_'});
        $e->setMetadataDriverImpl($d);
        $e->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
        $e->setProxyNamespace('Proxies');
        $e->setAutoGenerateProxyClasses(true);
        $e->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $e->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $e->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $e->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $e->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->getDoctrine_Orm_DefaultEntityListenerResolverService()) && false ?: '_'});
        $e->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(${($_ = isset($this->services['service_locator.sr6ctxe']) ? $this->services['service_locator.sr6ctxe'] : $this->services['service_locator.sr6ctxe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'}));
        $e->addCustomStringFunction('CAST', 'Cocorico\\CoreBundle\\DQL\\CastFunction');
        $e->addCustomNumericFunction('GEO_DISTANCE', 'Cocorico\\CoreBundle\\DQL\\GeoDistanceFunction');
        $e->addCustomDatetimeFunction('DATE_FORMAT', 'Cocorico\\CoreBundle\\DQL\\DateFormatFunction');
        $e->addCustomDatetimeFunction('TIME_DIFF', 'Cocorico\\CoreBundle\\DQL\\TimeDiffFunction');
        $e->addCustomDatetimeFunction('TIMESTAMP_DIFF', 'Cocorico\\CoreBundle\\DQL\\TimestampDiffFunction');

        $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $e);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_d1a6e31563d7ed697ada65a73a33a9a5681f2b3bc7ffda952a9da1be315bf4e8');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_d1a6e31563d7ed697ada65a73a33a9a5681f2b3bc7ffda952a9da1be315bf4e8');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_d1a6e31563d7ed697ada65a73a33a9a5681f2b3bc7ffda952a9da1be315bf4e8');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_mongodb.odm.data_collector.pretty' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\DataCollector\PrettyDataCollector
     */
    protected function getDoctrineMongodb_Odm_DataCollector_PrettyService()
    {
        $this->services['doctrine_mongodb.odm.data_collector.pretty'] = $instance = new \Doctrine\Bundle\MongoDBBundle\DataCollector\PrettyDataCollector();

        $instance->setBatchInsertThreshold(4);

        return $instance;
    }

    /**
     * Gets the private 'doctrine_mongodb.odm.default_configuration' shared service.
     *
     * @return \Doctrine\ODM\MongoDB\Configuration
     */
    protected function getDoctrineMongodb_Odm_DefaultConfigurationService()
    {
        $this->services['doctrine_mongodb.odm.default_configuration'] = $instance = new \Doctrine\ODM\MongoDB\Configuration();

        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf_mongodb_default_bvazuei');

        $b = new \Doctrine\Bundle\MongoDBBundle\Mapping\Driver\XmlDriver(array('/cocorico/vendor/sonata-project/user-bundle/src/Resources/config/doctrine' => 'Sonata\\UserBundle\\Document', '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/config/doctrine' => 'FOS\\MessageBundle\\Document'));
        $b->setGlobalBasename('mapping');

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'Sonata\\UserBundle\\Document');
        $c->addDriver($b, 'FOS\\MessageBundle\\Document');
        $c->addDriver(new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, array(0 => '/cocorico/src/Cocorico/CoreBundle/Document')), 'Cocorico\\CoreBundle\\Document');

        $d = new \Doctrine\Bundle\MongoDBBundle\Logger\Logger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->getMonolog_Logger_DoctrineService()) && false ?: '_'});
        $d->setBatchInsertThreshold(4);

        $instance->setDocumentNamespaces(array('SonataUserBundle' => 'Sonata\\UserBundle\\Document', 'FOSMessageBundle' => 'FOS\\MessageBundle\\Document', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\Document'));
        $instance->setMetadataCacheImpl($a);
        $instance->setMetadataDriverImpl($c);
        $instance->setProxyDir(($this->targetDirs[0].'/doctrine/odm/mongodb/Proxies'));
        $instance->setProxyNamespace('MongoDBODMProxies');
        $instance->setAutoGenerateProxyClasses(0);
        $instance->setHydratorDir(($this->targetDirs[0].'/doctrine/odm/mongodb/Hydrators'));
        $instance->setHydratorNamespace('Hydrators');
        $instance->setAutoGenerateHydratorClasses(0);
        $instance->setDefaultDB('costocking_dev');
        $instance->setDefaultCommitOptions(array());
        $instance->setRetryConnect(0);
        $instance->setRetryQuery(0);
        $instance->setDefaultRepositoryClassName('Doctrine\\ODM\\MongoDB\\DocumentRepository');
        $instance->setPersistentCollectionDir(($this->targetDirs[0].'/doctrine/odm/mongodb/PersistentCollections'));
        $instance->setPersistentCollectionNamespace('PersistentCollections');
        $instance->setAutoGeneratePersistentCollectionClasses(0);
        $instance->setLoggerCallable(array(0 => new \Doctrine\Bundle\MongoDBBundle\Logger\AggregateLogger(array(0 => $d, 1 => ${($_ = isset($this->services['doctrine_mongodb.odm.data_collector.pretty']) ? $this->services['doctrine_mongodb.odm.data_collector.pretty'] : $this->getDoctrineMongodb_Odm_DataCollector_PrettyService()) && false ?: '_'})), 1 => 'logQuery'));

        return $instance;
    }

    /**
     * Gets the private 'doctrine_mongodb.odm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator
     */
    protected function getDoctrineMongodb_Odm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine_mongodb.odm.default_manager_configurator'] = new \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator(array());
    }

    /**
     * Gets the private 'doctrine_mongodb.odm.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    protected function getDoctrineMongodb_Odm_EventManagerService()
    {
        return $this->services['doctrine_mongodb.odm.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
    }

    /**
     * Gets the private 'doctrine_odm.mongodb.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrineOdm_Mongodb_ValidatorInitializerService()
    {
        return $this->services['doctrine_odm.mongodb.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine_mongodb']) ? $this->services['doctrine_mongodb'] : $this->getDoctrineMongodbService()) && false ?: '_'});
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, '/cocorico/app/Resources', array(0 => '/cocorico/app'));
    }

    /**
     * Gets the private 'fos_message.authorizer' shared service.
     *
     * @return \FOS\MessageBundle\Security\Authorizer
     */
    protected function getFosMessage_AuthorizerService()
    {
        return $this->services['fos_message.authorizer'] = new \FOS\MessageBundle\Security\Authorizer(${($_ = isset($this->services['fos_message.participant_provider']) ? $this->services['fos_message.participant_provider'] : $this->getFosMessage_ParticipantProviderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_message.message_manager' shared service.
     *
     * @return \FOS\MessageBundle\EntityManager\MessageManager
     */
    protected function getFosMessage_MessageManagerService()
    {
        return $this->services['fos_message.message_manager'] = new \FOS\MessageBundle\EntityManager\MessageManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, 'Cocorico\\MessageBundle\\Entity\\Message', 'Cocorico\\MessageBundle\\Entity\\MessageMetadata');
    }

    /**
     * Gets the private 'fos_message.participant_provider' shared service.
     *
     * @return \FOS\MessageBundle\Security\ParticipantProvider
     */
    protected function getFosMessage_ParticipantProviderService()
    {
        return $this->services['fos_message.participant_provider'] = new \FOS\MessageBundle\Security\ParticipantProvider(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_message.provider' shared service.
     *
     * @return \FOS\MessageBundle\Provider\Provider
     */
    protected function getFosMessage_ProviderService()
    {
        return $this->services['fos_message.provider'] = new \FOS\MessageBundle\Provider\Provider(${($_ = isset($this->services['fos_message.thread_manager']) ? $this->services['fos_message.thread_manager'] : $this->getFosMessage_ThreadManagerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.message_manager']) ? $this->services['fos_message.message_manager'] : $this->getFosMessage_MessageManagerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.thread_reader']) ? $this->services['fos_message.thread_reader'] : $this->getFosMessage_ThreadReaderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.authorizer']) ? $this->services['fos_message.authorizer'] : $this->getFosMessage_AuthorizerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.participant_provider']) ? $this->services['fos_message.participant_provider'] : $this->getFosMessage_ParticipantProviderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_message.thread_manager' shared service.
     *
     * @return \FOS\MessageBundle\EntityManager\ThreadManager
     */
    protected function getFosMessage_ThreadManagerService()
    {
        return $this->services['fos_message.thread_manager'] = new \FOS\MessageBundle\EntityManager\ThreadManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, 'Cocorico\\MessageBundle\\Entity\\Thread', 'Cocorico\\MessageBundle\\Entity\\ThreadMetadata', ${($_ = isset($this->services['fos_message.message_manager']) ? $this->services['fos_message.message_manager'] : $this->getFosMessage_MessageManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_message.thread_reader' shared service.
     *
     * @return \FOS\MessageBundle\Reader\Reader
     */
    protected function getFosMessage_ThreadReaderService()
    {
        return $this->services['fos_message.thread_reader'] = new \FOS\MessageBundle\Reader\Reader(${($_ = isset($this->services['fos_message.participant_provider']) ? $this->services['fos_message.participant_provider'] : $this->getFosMessage_ParticipantProviderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.thread_manager']) ? $this->services['fos_message.thread_manager'] : $this->getFosMessage_ThreadManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_message.twig_extension' shared service.
     *
     * @return \FOS\MessageBundle\Twig\Extension\MessageExtension
     */
    protected function getFosMessage_TwigExtensionService()
    {
        return $this->services['fos_message.twig_extension'] = new \FOS\MessageBundle\Twig\Extension\MessageExtension(${($_ = isset($this->services['fos_message.participant_provider']) ? $this->services['fos_message.participant_provider'] : $this->getFosMessage_ParticipantProviderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.provider']) ? $this->services['fos_message.provider'] : $this->getFosMessage_ProviderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.authorizer']) ? $this->services['fos_message.authorizer'] : $this->getFosMessage_AuthorizerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = ${($_ = isset($this->services['fos_user.util.email_canonicalizer']) ? $this->services['fos_user.util.email_canonicalizer'] : $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer()) && false ?: '_'};

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'fos_user.util.email_canonicalizer' shared service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->getSecurity_EncoderFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->services['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'});
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->services['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hwi_oauth.resource_ownermap.main' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap
     */
    protected function getHwiOauth_ResourceOwnermap_MainService()
    {
        $this->services['hwi_oauth.resource_ownermap.main'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap(${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, $this->parameters['hwi_oauth.resource_owners'], $this->parameters['hwi_oauth.resource_ownermap.configured.main']);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the private 'hwi_oauth.security.oauth_utils' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\OAuthUtils
     */
    protected function getHwiOauth_Security_OauthUtilsService()
    {
        $this->services['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils(${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, true);

        $instance->addResourceOwnerMap(${($_ = isset($this->services['hwi_oauth.resource_ownermap.main']) ? $this->services['hwi_oauth.resource_ownermap.main'] : $this->getHwiOauth_ResourceOwnermap_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'hwi_oauth.templating.helper.oauth' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper
     */
    protected function getHwiOauth_Templating_Helper_OauthService()
    {
        $this->services['hwi_oauth.templating.helper.oauth'] = $instance = new \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper(${($_ = isset($this->services['hwi_oauth.security.oauth_utils']) ? $this->services['hwi_oauth.security.oauth_utils'] : $this->getHwiOauth_Security_OauthUtilsService()) && false ?: '_'});

        $instance->setRequest(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'ivory_ck_editor.renderer' shared service.
     *
     * @return \Ivory\CKEditorBundle\Renderer\CKEditorRenderer
     */
    protected function getIvoryCkEditor_RendererService()
    {
        return $this->services['ivory_ck_editor.renderer'] = new \Ivory\CKEditorBundle\Renderer\CKEditorRenderer($this);
    }

    /**
     * Gets the private 'ivory_ck_editor.twig_extension' shared service.
     *
     * @return \Ivory\CKEditorBundle\Twig\CKEditorExtension
     */
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension(${($_ = isset($this->services['ivory_ck_editor.renderer']) ? $this->services['ivory_ck_editor.renderer'] : $this->services['ivory_ck_editor.renderer'] = new \Ivory\CKEditorBundle\Renderer\CKEditorRenderer($this)) && false ?: '_'});
    }

    /**
     * Gets the private 'jms_di_extra.controller_resolver' shared service.
     *
     * @return \JMS\DiExtraBundle\HttpKernel\ControllerResolver
     */
    protected function getJmsDiExtra_ControllerResolverService()
    {
        return $this->services['jms_di_extra.controller_resolver'] = new \JMS\DiExtraBundle\HttpKernel\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'});
    }

    /**
     * Gets the private 'jms_i18n_routing.locale_resolver.default' shared service.
     *
     * @return \JMS\I18nRoutingBundle\Router\DefaultLocaleResolver
     */
    protected function getJmsI18nRouting_LocaleResolver_DefaultService()
    {
        return $this->services['jms_i18n_routing.locale_resolver.default'] = new \JMS\I18nRoutingBundle\Router\DefaultLocaleResolver('hl');
    }

    /**
     * Gets the private 'jms_translation.twig_extension' shared service.
     *
     * @return \JMS\TranslationBundle\Twig2\TranslationExtension
     */
    protected function getJmsTranslation_TwigExtensionService()
    {
        return $this->services['jms_translation.twig_extension'] = new \JMS\TranslationBundle\Twig2\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'knp_menu.listener.voters' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter(${($_ = isset($this->services['sonata.admin.menu.matcher.voter.admin']) ? $this->services['sonata.admin.menu.matcher.voter.admin'] : $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'knp_menu.menu_provider' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['sonata.admin.menu.group_provider']) ? $this->services['sonata.admin.menu.group_provider'] : $this->load(__DIR__.'/getSonata_Admin_Menu_GroupProviderService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['knp_menu.menu_provider.lazy']) ? $this->services['knp_menu.menu_provider.lazy'] : $this->load(__DIR__.'/getKnpMenu_MenuProvider_LazyService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['knp_menu.menu_provider.builder_alias']) ? $this->services['knp_menu.menu_provider.builder_alias'] : $this->load(__DIR__.'/getKnpMenu_MenuProvider_BuilderAliasService.php')) && false ?: '_'};
        }, 3));
    }

    /**
     * Gets the private 'knp_menu.renderer_provider' shared service.
     *
     * @return \Knp\Menu\Renderer\PsrProvider
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(array('list' => function () {
            return ${($_ = isset($this->services['knp_menu.renderer.list']) ? $this->services['knp_menu.renderer.list'] : $this->load(__DIR__.'/getKnpMenu_Renderer_ListService.php')) && false ?: '_'};
        }, 'twig' => function () {
            return ${($_ = isset($this->services['knp_menu.renderer.twig']) ? $this->services['knp_menu.renderer.twig'] : $this->load(__DIR__.'/getKnpMenu_Renderer_TwigService.php')) && false ?: '_'};
        })), 'twig');
    }

    /**
     * Gets the private 'lexik_currency.currency_extension' shared service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Twig\Extension\CurrencyExtension
     */
    protected function getLexikCurrency_CurrencyExtensionService()
    {
        return $this->services['lexik_currency.currency_extension'] = new \Lexik\Bundle\CurrencyBundle\Twig\Extension\CurrencyExtension($this);
    }

    /**
     * Gets the private 'lexik_currency.formatter' shared service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Currency\Formatter
     */
    protected function getLexikCurrency_FormatterService()
    {
        return $this->services['lexik_currency.formatter'] = new \Lexik\Bundle\CurrencyBundle\Currency\Formatter('fr');
    }

    /**
     * Gets the private 'lexik_currency.subscriber.locale' shared service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\EventListener\LocaleListener
     */
    protected function getLexikCurrency_Subscriber_LocaleService()
    {
        return $this->services['lexik_currency.subscriber.locale'] = new \Lexik\Bundle\CurrencyBundle\EventListener\LocaleListener(${($_ = isset($this->services['lexik_currency.formatter']) ? $this->services['lexik_currency.formatter'] : $this->services['lexik_currency.formatter'] = new \Lexik\Bundle\CurrencyBundle\Currency\Formatter('fr')) && false ?: '_'});
    }

    /**
     * Gets the private 'liip_imagine.cache.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->getLiipImagine_Filter_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.signer']) ? $this->services['liip_imagine.cache.signer'] : $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer('ThisTokenIsNotSoSecretChangeIt')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, NULL);

        $instance->addResolver('default', ${($_ = isset($this->services['liip_imagine.cache.resolver.default']) ? $this->services['liip_imagine.cache.resolver.default'] : $this->getLiipImagine_Cache_Resolver_DefaultService()) && false ?: '_'});
        $instance->addResolver('no_cache', ${($_ = isset($this->services['liip_imagine.cache.resolver.no_cache_web_path']) ? $this->services['liip_imagine.cache.resolver.no_cache_web_path'] : $this->getLiipImagine_Cache_Resolver_NoCacheWebPathService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the private 'liip_imagine.filter.configuration' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration($this->parameters['liip_imagine.filter_sets']);
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'fr', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\RotatingFileHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/dev.log'), 0, 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});
        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'oneup_uploader.templating.uploader_helper' shared service.
     *
     * @return \Oneup\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getOneupUploader_Templating_UploaderHelperService()
    {
        return $this->services['oneup_uploader.templating.uploader_helper'] = new \Oneup\UploaderBundle\Templating\Helper\UploaderHelper(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, $this->parameters['oneup_uploader.maxsize']);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router' shared service.
     *
     * @return \JMS\I18nRoutingBundle\Router\I18nRouter
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \JMS\I18nRoutingBundle\Router\I18nRouter($this, '/cocorico/app/config/routing_dev.yml', array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setLocaleResolver(${($_ = isset($this->services['jms_i18n_routing.locale_resolver.default']) ? $this->services['jms_i18n_routing.locale_resolver.default'] : $this->services['jms_i18n_routing.locale_resolver.default'] = new \JMS\I18nRoutingBundle\Router\DefaultLocaleResolver('hl')) && false ?: '_'});
        $instance->setI18nLoaderId('jms_i18n_routing.loader');
        $instance->setDefaultLocale('fr');
        $instance->setRedirectToHost(true);

        return $instance;
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', '192.168.229.159', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, '/cocorico', true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.admin']) ? $this->services['security.authentication.provider.dao.admin'] : $this->load(__DIR__.'/getSecurity_Authentication_Provider_Dao_AdminService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.admin']) ? $this->services['security.authentication.provider.anonymous.admin'] : $this->services['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5cf8f83aa3e090.98729169')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.authentication.provider.dao.main']) ? $this->services['security.authentication.provider.dao.main'] : $this->load(__DIR__.'/getSecurity_Authentication_Provider_Dao_MainService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['hwi_oauth.authentication.provider.oauth.main']) ? $this->services['hwi_oauth.authentication.provider.oauth.main'] : $this->load(__DIR__.'/getHwiOauth_Authentication_Provider_Oauth_MainService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5cf8f83aa3e090.98729169')) && false ?: '_'};
        }, 5), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('algorithm' => 'sha512', 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => 13)));
    }

    /**
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.admin' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.admin']) ? $this->services['security.firewall.map.context.admin'] : $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_AdminService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_MainService.php')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.admin' => ${($_ = isset($this->services['security.request_matcher.hwsmhqp']) ? $this->services['security.request_matcher.hwsmhqp'] : $this->services['security.request_matcher.hwsmhqp'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/')) && false ?: '_'};
            yield 'security.firewall.map.context.main' => ${($_ = isset($this->services['security.request_matcher.atg4mne']) ? $this->services['security.request_matcher.atg4mne'] : $this->services['security.request_matcher.atg4mne'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(en|fr)')) && false ?: '_'};
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.zfhj2lw']) ? $this->services['security.request_matcher.zfhj2lw'] : $this->services['security.request_matcher.zfhj2lw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')) && false ?: '_'};
        }, 3));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'};

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i');
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL, 'admin');
        $instance->registerListener('main', 'cocorico_user_logout', 'logout', '_csrf_token', NULL, 'frontend');

        return $instance;
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['cocorico.listing_param_converter']) ? $this->services['cocorico.listing_param_converter'] : $this->getCocorico_ListingParamConverterService()) && false ?: '_'}, 0, 'listing');
        $instance->add(${($_ = isset($this->services['cocorico.listing_availability_param_converter']) ? $this->services['cocorico.listing_availability_param_converter'] : $this->getCocorico_ListingAvailabilityParamConverterService()) && false ?: '_'}, -1, 'listing_availability');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'service_locator.sr6ctxe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_Sr6ctxeService()
    {
        return $this->services['service_locator.sr6ctxe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array());
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0')) && false ?: '_'});
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'simplethings_entityaudit.config' shared service.
     *
     * @return \SimpleThings\EntityAudit\AuditConfiguration
     */
    protected function getSimplethingsEntityaudit_ConfigService()
    {
        $this->services['simplethings_entityaudit.config'] = $instance = new \SimpleThings\EntityAudit\AuditConfiguration();

        $instance->setAuditedEntityClasses($this->parameters['simplethings.entityaudit.audited_entities']);
        $instance->setGlobalIgnoreColumns(array());
        $instance->setTablePrefix('');
        $instance->setTableSuffix('_audit');
        $instance->setRevisionTableName('revisions');
        $instance->setRevisionIdFieldType('integer');
        $instance->setRevisionFieldName('rev');
        $instance->setRevisionTypeFieldName('revtype');
        $instance->setUsernameCallable(${($_ = isset($this->services['simplethings_entityaudit.username_callable.token_storage']) ? $this->services['simplethings_entityaudit.username_callable.token_storage'] : $this->services['simplethings_entityaudit.username_callable.token_storage'] = new \SimpleThings\EntityAudit\User\TokenStorageUsernameCallable($this)) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'simplethings_entityaudit.create_schema_listener' shared service.
     *
     * @return \SimpleThings\EntityAudit\EventListener\CreateSchemaListener
     */
    protected function getSimplethingsEntityaudit_CreateSchemaListenerService()
    {
        return $this->services['simplethings_entityaudit.create_schema_listener'] = new \SimpleThings\EntityAudit\EventListener\CreateSchemaListener(${($_ = isset($this->services['simplethings_entityaudit.manager']) ? $this->services['simplethings_entityaudit.manager'] : $this->getSimplethingsEntityaudit_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'simplethings_entityaudit.log_revisions_listener' shared service.
     *
     * @return \SimpleThings\EntityAudit\EventListener\LogRevisionsListener
     */
    protected function getSimplethingsEntityaudit_LogRevisionsListenerService()
    {
        return $this->services['simplethings_entityaudit.log_revisions_listener'] = new \SimpleThings\EntityAudit\EventListener\LogRevisionsListener(${($_ = isset($this->services['simplethings_entityaudit.manager']) ? $this->services['simplethings_entityaudit.manager'] : $this->getSimplethingsEntityaudit_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'simplethings_entityaudit.manager' shared service.
     *
     * @return \SimpleThings\EntityAudit\AuditManager
     */
    protected function getSimplethingsEntityaudit_ManagerService()
    {
        return $this->services['simplethings_entityaudit.manager'] = new \SimpleThings\EntityAudit\AuditManager(${($_ = isset($this->services['simplethings_entityaudit.config']) ? $this->services['simplethings_entityaudit.config'] : $this->getSimplethingsEntityaudit_ConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'simplethings_entityaudit.username_callable.token_storage' shared service.
     *
     * @return \SimpleThings\EntityAudit\User\TokenStorageUsernameCallable
     */
    protected function getSimplethingsEntityaudit_UsernameCallable_TokenStorageService()
    {
        return $this->services['simplethings_entityaudit.username_callable.token_storage'] = new \SimpleThings\EntityAudit\User\TokenStorageUsernameCallable($this);
    }

    /**
     * Gets the private 'sonata.admin.booking' service.
     *
     * @return \Cocorico\CoreBundle\Admin\BookingAdmin
     */
    protected function getSonata_Admin_BookingService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\BookingAdmin('sonata.admin.booking', 'Cocorico\\CoreBundle\\Entity\\Booking', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setTimeUnit(1440);
        $instance->setBookingExpirationDelay(2880);
        $instance->setBookingAcceptationDelay(240);
        $instance->setIncludeVat(false);
        $instance->setBundlesEnabled($this->parameters['kernel.bundles']);
        $instance->setTimezone('Europe/Paris');
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Bookings');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.booking_bank_wire' service.
     *
     * @return \Cocorico\CoreBundle\Admin\BookingBankWireAdmin
     */
    protected function getSonata_Admin_BookingBankWireService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\BookingBankWireAdmin('sonata.admin.booking_bank_wire', 'Cocorico\\CoreBundle\\Entity\\BookingBankWire', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setTimeUnit(1440);
        $instance->setCurrency('EUR');
        $instance->setBookingBankWireManager(${($_ = isset($this->services['cocorico.booking_bank_wire.manager']) ? $this->services['cocorico.booking_bank_wire.manager'] : $this->load(__DIR__.'/getCocorico_BookingBankWire_ManagerService.php')) && false ?: '_'});
        $instance->setBundlesEnabled($this->parameters['kernel.bundles']);
        $instance->setTimezone('Europe/Paris');
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Bank Wires');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.booking_payin_refund' service.
     *
     * @return \Cocorico\CoreBundle\Admin\BookingPayinRefundAdmin
     */
    protected function getSonata_Admin_BookingPayinRefundService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\BookingPayinRefundAdmin('sonata.admin.booking_payin_refund', 'Cocorico\\CoreBundle\\Entity\\BookingPayinRefund', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setTimeUnit(1440);
        $instance->setBundlesEnabled($this->parameters['kernel.bundles']);
        $instance->setTimezone('Europe/Paris');
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Payin Refunds');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.booking_user_address' service.
     *
     * @return \Cocorico\CoreBundle\Admin\BookingUserAddressAdmin
     */
    protected function getSonata_Admin_BookingUserAddressService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\BookingUserAddressAdmin('sonata.admin.booking_user_address', 'Cocorico\\CoreBundle\\Entity\\BookingUserAddress', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('cocorico_user');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('-');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.contact' service.
     *
     * @return \Cocorico\ContactBundle\Admin\ContactAdmin
     */
    protected function getSonata_Admin_ContactService()
    {
        $instance = new \Cocorico\ContactBundle\Admin\ContactAdmin('sonata.admin.contact', 'Cocorico\\ContactBundle\\Entity\\Contact', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Contact');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.footer' service.
     *
     * @return \Cocorico\CMSBundle\Admin\FooterAdmin
     */
    protected function getSonata_Admin_FooterService()
    {
        $instance = new \Cocorico\CMSBundle\Admin\FooterAdmin('sonata.admin.footer', 'Cocorico\\CMSBundle\\Entity\\Footer', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setFooterManager(${($_ = isset($this->services['cocorico_cms.footer.manager']) ? $this->services['cocorico_cms.footer.manager'] : $this->load(__DIR__.'/getCocoricoCms_Footer_ManagerService.php')) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Footers');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.listing' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingAdmin
     */
    protected function getSonata_Admin_ListingService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingAdmin('sonata.admin.listing', 'Cocorico\\CoreBundle\\Entity\\Listing', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setIncludeVat(false);
        $instance->setBundlesEnabled($this->parameters['kernel.bundles']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Listings');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.listing_category' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCategoryAdmin
     */
    protected function getSonata_Admin_ListingCategoryService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCategoryAdmin('sonata.admin.listing_category', 'Cocorico\\CoreBundle\\Entity\\ListingCategory', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setBundlesEnabled($this->parameters['kernel.bundles']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Category');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.listing_characteristic' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCharacteristicAdmin
     */
    protected function getSonata_Admin_ListingCharacteristicService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCharacteristicAdmin('sonata.admin.listing_characteristic', 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristic', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Characteristic');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.listing_characteristic_group' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCharacteristicGroupAdmin
     */
    protected function getSonata_Admin_ListingCharacteristicGroupService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCharacteristicGroupAdmin('sonata.admin.listing_characteristic_group', 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicGroup', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Characteristic Group');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.listing_characteristic_type' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCharacteristicTypeAdmin
     */
    protected function getSonata_Admin_ListingCharacteristicTypeService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCharacteristicTypeAdmin('sonata.admin.listing_characteristic_type', 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicType', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Characteristic Type');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.listing_characteristic_value' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCharacteristicValueAdmin
     */
    protected function getSonata_Admin_ListingCharacteristicValueService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCharacteristicValueAdmin('sonata.admin.listing_characteristic_value', 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicValue', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('-');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.message' service.
     *
     * @return \Cocorico\MessageBundle\Admin\MessageAdmin
     */
    protected function getSonata_Admin_MessageService()
    {
        $instance = new \Cocorico\MessageBundle\Admin\MessageAdmin('sonata.admin.message', 'Cocorico\\MessageBundle\\Entity\\Message', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('-');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.model_autocomplete' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the private 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the private 'sonata.admin.page' service.
     *
     * @return \Cocorico\PageBundle\Admin\PageAdmin
     */
    protected function getSonata_Admin_PageService()
    {
        $instance = new \Cocorico\PageBundle\Admin\PageAdmin('sonata.admin.page', 'Cocorico\\PageBundle\\Entity\\Page', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Pages');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.parameter' service.
     *
     * @return \Cocorico\ConfigBundle\Admin\ParameterAdmin
     */
    protected function getSonata_Admin_ParameterService()
    {
        $instance = new \Cocorico\ConfigBundle\Admin\ParameterAdmin('sonata.admin.parameter', 'Cocorico\\ConfigBundle\\Entity\\Parameter', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Configuration');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.review' service.
     *
     * @return \Cocorico\ReviewBundle\Admin\ReviewAdmin
     */
    protected function getSonata_Admin_ReviewService()
    {
        $instance = new \Cocorico\ReviewBundle\Admin\ReviewAdmin('sonata.admin.review', 'Cocorico\\ReviewBundle\\Entity\\Review', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Reviews');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.thread' service.
     *
     * @return \Cocorico\MessageBundle\Admin\ThreadAdmin
     */
    protected function getSonata_Admin_ThreadService()
    {
        $instance = new \Cocorico\MessageBundle\Admin\ThreadAdmin('sonata.admin.thread', 'Cocorico\\MessageBundle\\Entity\\Thread', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Messages');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.admin.user_address' service.
     *
     * @return \Cocorico\UserBundle\Admin\UserAddressAdmin
     */
    protected function getSonata_Admin_UserAddressService()
    {
        $instance = new \Cocorico\UserBundle\Admin\UserAddressAdmin('sonata.admin.user_address', 'Cocorico\\UserBundle\\Entity\\UserAddress', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('cocorico_user');
        $instance->setLocales($this->parameters['cocorico.locales']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load(__DIR__.'/getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load(__DIR__.'/getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load(__DIR__.'/getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler()) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load(__DIR__.'/getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load(__DIR__.'/getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy()) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('-');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates($this->parameters['sonata.admin.configuration.templates']);
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load(__DIR__.'/getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));

        return $instance;
    }

    /**
     * Gets the private 'sonata.block.cache.handler.default' shared service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the private 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(${($_ = isset($this->services['sonata.block.loader.chain']) ? $this->services['sonata.block.loader.chain'] : $this->getSonata_Block_Loader_ChainService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, $this->parameters['sonata_block.cache_blocks'], ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sonata.block.exception.strategy.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /**
     * Gets the private 'sonata.block.loader.chain' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => ${($_ = isset($this->services['sonata.block.loader.service']) ? $this->services['sonata.block.loader.service'] : $this->getSonata_Block_Loader_ServiceService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'sonata.block.loader.service' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.admin.block.search_result', 2 => 'sonata.user.block.menu', 3 => 'sonata.user.block.account', 4 => 'sonata.block.service.text'));
    }

    /**
     * Gets the private 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});

        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array(0 => 'admin'));
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', array());
        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array(0 => 'cms'));
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata.admin_doctrine_orm.block.audit', 'sonata.admin_doctrine_orm.block.audit', array());

        return $instance;
    }

    /**
     * Gets the private 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.exception.strategy.manager']) ? $this->services['sonata.block.exception.strategy.manager'] : $this->getSonata_Block_Exception_Strategy_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sonata.block.templating.helper' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, $this->parameters['sonata_block.cache_blocks'], ${($_ = isset($this->services['sonata.block.renderer.default']) ? $this->services['sonata.block.renderer.default'] : $this->getSonata_Block_Renderer_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.context_manager.default']) ? $this->services['sonata.block.context_manager.default'] : $this->getSonata_Block_ContextManager_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});
    }

    /**
     * Gets the private 'sonata.block.twig.global' shared service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }

    /**
     * Gets the private 'sonata.core.twig.extension.text' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension();
    }

    /**
     * Gets the private 'sonata.core.twig.extension.wrapping' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FormTypeExtension
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard');
    }

    /**
     * Gets the private 'sonata.core.twig.status_extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();

        $instance->addStatusService(${($_ = isset($this->services['sonata.core.flashmessage.manager']) ? $this->services['sonata.core.flashmessage.manager'] : $this->getSonata_Core_Flashmessage_ManagerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'sonata.core.twig.template_extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\TemplateExtension
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.core.model.adapter.chain']) ? $this->services['sonata.core.model.adapter.chain'] : $this->getSonata_Core_Model_Adapter_ChainService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sonata.easy_extends.doctrine.mapper' shared service.
     *
     * @return \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper
     */
    protected function getSonata_EasyExtends_Doctrine_MapperService()
    {
        $this->services['sonata.easy_extends.doctrine.mapper'] = $instance = new \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, array());

        $instance->addAssociation('Cocorico\\UserBundle\\Entity\\User', 'mapManyToMany', array(0 => array('fieldName' => 'groups', 'targetEntity' => 'Cocorico\\UserBundle\\Entity\\Group', 'cascade' => array(), 'joinTable' => array('name' => 'user_group', 'joinColumns' => array(0 => array('name' => 'user_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'inverseJoinColumns' => array(0 => array('name' => 'group_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE'))))));

        return $instance;
    }

    /**
     * Gets the private 'sonata.user.twig.global' shared service.
     *
     * @return \Sonata\UserBundle\Twig\GlobalVariables
     */
    protected function getSonata_User_Twig_GlobalService()
    {
        return $this->services['sonata.user.twig.global'] = new \Sonata\UserBundle\Twig\GlobalVariables($this);
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, '/cocorico/app/Resources', array(0 => '/cocorico/app'))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader()) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader()) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader()) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader()) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader()) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader()) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader()) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader()) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader()) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->services['translation.loader.xliff'] = new \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader()) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()) && false ?: '_'};
        })), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'fr', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml'), 'ar' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ar.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ar.xliff', 7 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.ar.yml', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/validators.ar.yml'), 'az' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf'), 'bg' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.bg.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.bg.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.bg.xliff'), 'ca' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ca.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ca.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ca.xliff'), 'cs' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.cs.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.cs.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.cs.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.cs.yml'), 'cy' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf'), 'da' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml'), 'de' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.de.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.de.xliff', 7 => '/cocorico/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.de.xliff', 8 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.de.xliff', 9 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.de.yml', 10 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.de.yml'), 'el' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 'en' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.en.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.en.xliff', 7 => '/cocorico/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.en.xliff', 8 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.en.xliff', 9 => '/cocorico/vendor/oneup/uploader-bundle/Oneup/UploaderBundle/Resources/translations/OneupUploaderBundle.en.yml', 10 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.en.yml', 11 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/validators.en.yml', 12 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.en.yml', 13 => '/cocorico/app/Resources/translations/FOSUserBundle.en.xliff', 14 => '/cocorico/app/Resources/translations/SonataAdminBundle.en.xliff', 15 => '/cocorico/app/Resources/translations/SonataUserBundle.en.xliff', 16 => '/cocorico/app/Resources/translations/cocorico.en.xliff', 17 => '/cocorico/app/Resources/translations/cocorico_booking.en.xliff', 18 => '/cocorico/app/Resources/translations/cocorico_breadcrumbs.en.xliff', 19 => '/cocorico/app/Resources/translations/cocorico_contact.en.xliff', 20 => '/cocorico/app/Resources/translations/cocorico_geo.en.xliff', 21 => '/cocorico/app/Resources/translations/cocorico_home.en.xliff', 22 => '/cocorico/app/Resources/translations/cocorico_listing.en.xliff', 23 => '/cocorico/app/Resources/translations/cocorico_mail.en.xliff', 24 => '/cocorico/app/Resources/translations/cocorico_message.en.xliff', 25 => '/cocorico/app/Resources/translations/cocorico_meta.en.xliff', 26 => '/cocorico/app/Resources/translations/cocorico_review.en.xliff', 27 => '/cocorico/app/Resources/translations/cocorico_user.en.xliff', 28 => '/cocorico/app/Resources/translations/messages.en.xliff', 29 => '/cocorico/app/Resources/translations/routes.en.xliff', 30 => '/cocorico/app/Resources/translations/validators.en.xliff'), 'es' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.es.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.es.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.es.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.es.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.es.yml'), 'et' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml'), 'eu' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml', 4 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.eu.xliff', 5 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.eu.xliff'), 'fa' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fa.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fa.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fa.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.fa.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.fa.yml'), 'fi' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml', 4 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fi.xliff', 5 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fi.xliff'), 'fr' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fr.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.fr.xliff', 7 => '/cocorico/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.fr.xliff', 8 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.fr.xliff', 9 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.fr.yml', 10 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/validators.fr.yml', 11 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.fr.yml', 12 => '/cocorico/app/Resources/translations/FOSUserBundle.fr.xliff', 13 => '/cocorico/app/Resources/translations/SonataAdminBundle.fr.xliff', 14 => '/cocorico/app/Resources/translations/SonataUserBundle.fr.xliff', 15 => '/cocorico/app/Resources/translations/cocorico.fr.xliff', 16 => '/cocorico/app/Resources/translations/cocorico_booking.fr.xliff', 17 => '/cocorico/app/Resources/translations/cocorico_breadcrumbs.fr.xliff', 18 => '/cocorico/app/Resources/translations/cocorico_contact.fr.xliff', 19 => '/cocorico/app/Resources/translations/cocorico_geo.fr.xliff', 20 => '/cocorico/app/Resources/translations/cocorico_home.fr.xliff', 21 => '/cocorico/app/Resources/translations/cocorico_listing.fr.xliff', 22 => '/cocorico/app/Resources/translations/cocorico_mail.fr.xliff', 23 => '/cocorico/app/Resources/translations/cocorico_message.fr.xliff', 24 => '/cocorico/app/Resources/translations/cocorico_meta.fr.xliff', 25 => '/cocorico/app/Resources/translations/cocorico_review.fr.xliff', 26 => '/cocorico/app/Resources/translations/cocorico_user.fr.xliff', 27 => '/cocorico/app/Resources/translations/messages.fr.xliff', 28 => '/cocorico/app/Resources/translations/routes.fr.xliff', 29 => '/cocorico/app/Resources/translations/validators.fr.xliff'), 'gl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml'), 'he' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml'), 'hr' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hr.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.hr.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.hr.xliff'), 'hu' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hu.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.hu.xliff', 7 => '/cocorico/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.hu.xliff', 8 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.hu.xliff', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.hu.yml'), 'hy' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf'), 'id' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml'), 'it' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.it.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.it.xliff', 7 => '/cocorico/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.it.xliff', 8 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.it.xliff', 9 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.it.yml', 10 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.it.yml'), 'ja' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ja.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ja.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ja.xliff'), 'lb' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml', 4 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lb.xliff', 5 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.lb.xliff'), 'lt' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lt.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.lt.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.lt.xliff'), 'lv' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lv.xliff'), 'mn' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf'), 'nl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.nl.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.nl.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.nl.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.nl.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.nl.yml'), 'nn' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 'no' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf', 3 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.no.xliff'), 'pl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pl.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pl.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pl.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.pl.yml', 9 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/validators.pl.yml', 10 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.pl.yml'), 'pt' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml', 4 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt.xliff', 5 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pt.xliff', 6 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pt.xliff'), 'pt_BR' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt_BR.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.pt_BR.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.pt_BR.xliff'), 'ro' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ro.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ro.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ro.xliff'), 'ru' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ru.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.ru.xliff', 7 => '/cocorico/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.ru.xliff', 8 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/FOSUserBundle.ru.xliff', 9 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.ru.xliff', 10 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.ru.yml', 11 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/validators.ru.yml', 12 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.ru.yml'), 'sk' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sk.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.sk.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.sk.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.sk.yml'), 'sl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sl.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.sl.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.sl.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.sl.yml'), 'sq' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 'sr_Cyrl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf'), 'sr_Latn' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 'sv' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml', 5 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.sv.yml'), 'th' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 'tr' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml', 4 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.tr.yml'), 'uk' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml', 4 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.uk.xliff', 5 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.uk.xliff', 6 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.uk.xliff', 7 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.uk.yml'), 'vi' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 'zh_CN' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml', 5 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_CN.xliff', 6 => '/cocorico/vendor/sonata-project/core-bundle/src/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 'zh_TW' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf', 1 => '/cocorico/vendor/sonata-project/user-bundle/src/Resources/translations/SonataUserBundle.zh_TW.xliff'), 'pt_PT' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf'), 'ua' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf'), 'bn' => array(0 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml'), 'bn_BD' => array(0 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml'), 'eo' => array(0 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml'), 'ky' => array(0 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 'nb' => array(0 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'), 'sv_SE' => array(0 => '/cocorico/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sv_SE.xliff'), 'zh' => array(0 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.zh.yml'), 'php' => array(0 => '/cocorico/app/Resources/translations/FOSUserBundle.php.xliff', 1 => '/cocorico/app/Resources/translations/SonataAdminBundle.php.xliff', 2 => '/cocorico/app/Resources/translations/SonataUserBundle.php.xliff', 3 => '/cocorico/app/Resources/translations/cocorico.php.xliff', 4 => '/cocorico/app/Resources/translations/cocorico_booking.php.xliff', 5 => '/cocorico/app/Resources/translations/cocorico_breadcrumbs.php.xliff', 6 => '/cocorico/app/Resources/translations/cocorico_contact.php.xliff', 7 => '/cocorico/app/Resources/translations/cocorico_geo.php.xliff', 8 => '/cocorico/app/Resources/translations/cocorico_home.php.xliff', 9 => '/cocorico/app/Resources/translations/cocorico_listing.php.xliff', 10 => '/cocorico/app/Resources/translations/cocorico_mail.php.xliff', 11 => '/cocorico/app/Resources/translations/cocorico_message.php.xliff', 12 => '/cocorico/app/Resources/translations/cocorico_meta.php.xliff', 13 => '/cocorico/app/Resources/translations/cocorico_review.php.xliff', 14 => '/cocorico/app/Resources/translations/cocorico_user.php.xliff', 15 => '/cocorico/app/Resources/translations/messages.php.xliff', 16 => '/cocorico/app/Resources/translations/routes.php.xliff', 17 => '/cocorico/app/Resources/translations/validators.php.xliff'))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'fr'));

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /**
     * Gets the private 'twig.extension.fm_elfinder_init' shared service.
     *
     * @return \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension
     */
    protected function getTwig_Extension_FmElfinderInitService()
    {
        $a = ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'};

        if (isset($this->services['twig.extension.fm_elfinder_init'])) {
            return $this->services['twig.extension.fm_elfinder_init'];
        }

        return $this->services['twig.extension.fm_elfinder_init'] = new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($a);
    }

    /**
     * Gets the private 'twig.extension.intl' shared service.
     *
     * @return \Twig_Extensions_Extension_Intl
     */
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, '/cocorico');

        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '!Framework');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', '!Security');
        $instance->addPath('/cocorico/app/Resources/TwigBundle/views', 'Twig');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '!Twig');
        $instance->addPath('/cocorico/vendor/symfony/swiftmailer-bundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/cocorico/vendor/symfony/swiftmailer-bundle/Resources/views', '!Swiftmailer');
        $instance->addPath('/cocorico/vendor/doctrine/doctrine-bundle/Resources/views', 'Doctrine');
        $instance->addPath('/cocorico/vendor/doctrine/doctrine-bundle/Resources/views', '!Doctrine');
        $instance->addPath('/cocorico/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views', 'JMSTranslation');
        $instance->addPath('/cocorico/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views', '!JMSTranslation');
        $instance->addPath('/cocorico/vendor/friendsofsymfony/user-bundle/Resources/views', 'FOSUser');
        $instance->addPath('/cocorico/vendor/friendsofsymfony/user-bundle/Resources/views', '!FOSUser');
        $instance->addPath('/cocorico/vendor/doctrine/mongodb-odm-bundle/Resources/views', 'DoctrineMongoDB');
        $instance->addPath('/cocorico/vendor/doctrine/mongodb-odm-bundle/Resources/views', '!DoctrineMongoDB');
        $instance->addPath('/cocorico/src/Cocorico/SonataAdminBundle/Resources/views', 'SonataAdmin');
        $instance->addPath('/cocorico/vendor/sonata-project/admin-bundle/src/Resources/views', 'SonataAdmin');
        $instance->addPath('/cocorico/vendor/sonata-project/admin-bundle/src/Resources/views', '!SonataAdmin');
        $instance->addPath('/cocorico/vendor/sonata-project/core-bundle/src/Resources/views', 'SonataCore');
        $instance->addPath('/cocorico/vendor/sonata-project/core-bundle/src/Resources/views', '!SonataCore');
        $instance->addPath('/cocorico/vendor/sonata-project/block-bundle/src/Resources/views', 'SonataBlock');
        $instance->addPath('/cocorico/vendor/sonata-project/block-bundle/src/Resources/views', '!SonataBlock');
        $instance->addPath('/cocorico/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views', 'SonataDoctrineORMAdmin');
        $instance->addPath('/cocorico/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views', '!SonataDoctrineORMAdmin');
        $instance->addPath('/cocorico/src/Cocorico/SonataUserBundle/Resources/views', 'SonataUser');
        $instance->addPath('/cocorico/vendor/sonata-project/user-bundle/src/Resources/views', 'SonataUser');
        $instance->addPath('/cocorico/vendor/sonata-project/user-bundle/src/Resources/views', '!SonataUser');
        $instance->addPath('/cocorico/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle/Resources/views', 'A2lixTranslationForm');
        $instance->addPath('/cocorico/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle/Resources/views', '!A2lixTranslationForm');
        $instance->addPath('/cocorico/vendor/liip/imagine-bundle/Resources/views', 'LiipImagine');
        $instance->addPath('/cocorico/vendor/liip/imagine-bundle/Resources/views', '!LiipImagine');
        $instance->addPath('/cocorico/vendor/willdurand/geocoder-bundle/Resources/views', 'BazingaGeocoder');
        $instance->addPath('/cocorico/vendor/willdurand/geocoder-bundle/Resources/views', '!BazingaGeocoder');
        $instance->addPath('/cocorico/src/Cocorico/MessageBundle/Resources/views', 'FOSMessage');
        $instance->addPath('/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views', 'FOSMessage');
        $instance->addPath('/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views', '!FOSMessage');
        $instance->addPath('/cocorico/vendor/knplabs/knp-menu-bundle/src/Resources/views', 'KnpMenu');
        $instance->addPath('/cocorico/vendor/knplabs/knp-menu-bundle/src/Resources/views', '!KnpMenu');
        $instance->addPath('/cocorico/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Resources/views', 'WhiteOctoberBreadcrumbs');
        $instance->addPath('/cocorico/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Resources/views', '!WhiteOctoberBreadcrumbs');
        $instance->addPath('/cocorico/vendor/hwi/oauth-bundle/Resources/views', 'HWIOAuth');
        $instance->addPath('/cocorico/vendor/hwi/oauth-bundle/Resources/views', '!HWIOAuth');
        $instance->addPath('/cocorico/vendor/egeloen/ckeditor-bundle/Resources/views', 'IvoryCKEditor');
        $instance->addPath('/cocorico/vendor/egeloen/ckeditor-bundle/Resources/views', '!IvoryCKEditor');
        $instance->addPath('/cocorico/vendor/helios-ag/fm-elfinder-bundle/Resources/views', 'FMElfinder');
        $instance->addPath('/cocorico/vendor/helios-ag/fm-elfinder-bundle/Resources/views', '!FMElfinder');
        $instance->addPath('/cocorico/vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit/Resources/views', 'SimpleThingsEntityAudit');
        $instance->addPath('/cocorico/vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit/Resources/views', '!SimpleThingsEntityAudit');
        $instance->addPath('/cocorico/src/Cocorico/CoreBundle/Resources/views', 'CocoricoCore');
        $instance->addPath('/cocorico/src/Cocorico/CoreBundle/Resources/views', '!CocoricoCore');
        $instance->addPath('/cocorico/src/Cocorico/GeoBundle/Resources/views', 'CocoricoGeo');
        $instance->addPath('/cocorico/src/Cocorico/GeoBundle/Resources/views', '!CocoricoGeo');
        $instance->addPath('/cocorico/src/Cocorico/UserBundle/Resources/views', 'CocoricoUser');
        $instance->addPath('/cocorico/src/Cocorico/UserBundle/Resources/views', '!CocoricoUser');
        $instance->addPath('/cocorico/src/Cocorico/PageBundle/Resources/views', 'CocoricoPage');
        $instance->addPath('/cocorico/src/Cocorico/PageBundle/Resources/views', '!CocoricoPage');
        $instance->addPath('/cocorico/src/Cocorico/CMSBundle/Resources/views', 'CocoricoCMS');
        $instance->addPath('/cocorico/src/Cocorico/CMSBundle/Resources/views', '!CocoricoCMS');
        $instance->addPath('/cocorico/src/Cocorico/BreadcrumbBundle/Resources/views', 'CocoricoBreadcrumb');
        $instance->addPath('/cocorico/src/Cocorico/BreadcrumbBundle/Resources/views', '!CocoricoBreadcrumb');
        $instance->addPath('/cocorico/src/Cocorico/SonataAdminBundle/Resources/views', 'CocoricoSonataAdmin');
        $instance->addPath('/cocorico/src/Cocorico/SonataUserBundle/Resources/views', 'CocoricoSonataUser');
        $instance->addPath('/cocorico/src/Cocorico/MessageBundle/Resources/views', 'CocoricoMessage');
        $instance->addPath('/cocorico/src/Cocorico/ContactBundle/Resources/views', 'CocoricoContact');
        $instance->addPath('/cocorico/src/Cocorico/ContactBundle/Resources/views', '!CocoricoContact');
        $instance->addPath('/cocorico/src/Cocorico/ReviewBundle/Resources/views', 'CocoricoReview');
        $instance->addPath('/cocorico/src/Cocorico/ReviewBundle/Resources/views', '!CocoricoReview');
        $instance->addPath('/cocorico/src/Cocorico/ConfigBundle/Resources/views', 'CocoricoConfig');
        $instance->addPath('/cocorico/src/Cocorico/ConfigBundle/Resources/views', '!CocoricoConfig');
        $instance->addPath('/cocorico/src/Cocorico/TimeBundle/Resources/views', 'CocoricoTime');
        $instance->addPath('/cocorico/src/Cocorico/TimeBundle/Resources/views', '!CocoricoTime');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views', 'Debug');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views', '!Debug');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', 'WebProfiler');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', '!WebProfiler');
        $instance->addPath('/cocorico/app/Resources/views');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');
        $instance->addPath('/cocorico/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views');

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'twig.text_extension' shared service.
     *
     * @return \Twig_Extensions_Extension_Text
     */
    protected function getTwig_TextExtensionService()
    {
        return $this->services['twig.text_extension'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml', 2 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/config/validation.xml'));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->getDoctrine_Orm_ValidatorInitializerService()) && false ?: '_'}, 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}), 2 => ${($_ = isset($this->services['doctrine_odm.mongodb.validator_initializer']) ? $this->services['doctrine_odm.mongodb.validator_initializer'] : $this->getDoctrineOdm_Mongodb_ValidatorInitializerService()) && false ?: '_'}));
        $instance->addXmlMapping('/cocorico/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml');

        return $instance;
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Cocorico\\CoreBundle\\Validator\\Constraints\\BookingValidator' => function () {
            return ${($_ = isset($this->services['cocorico.booking_validator']) ? $this->services['cocorico.booking_validator'] : $this->load(__DIR__.'/getCocorico_BookingValidatorService.php')) && false ?: '_'};
        }, 'Cocorico\\CoreBundle\\Validator\\Constraints\\ListingAvailabilitiesPriceValidator' => function () {
            return ${($_ = isset($this->services['cocorico.listing_availabilities_price_validator']) ? $this->services['cocorico.listing_availabilities_price_validator'] : $this->services['cocorico.listing_availabilities_price_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilitiesPriceValidator(100)) && false ?: '_'};
        }, 'Cocorico\\CoreBundle\\Validator\\Constraints\\ListingAvailabilityValidator' => function () {
            return ${($_ = isset($this->services['cocorico.listing_availability_validator']) ? $this->services['cocorico.listing_availability_validator'] : $this->services['cocorico.listing_availability_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilityValidator(100)) && false ?: '_'};
        }, 'Cocorico\\CoreBundle\\Validator\\Constraints\\ListingDiscountValidator' => function () {
            return ${($_ = isset($this->services['cocorico.listing_discount_validator']) ? $this->services['cocorico.listing_discount_validator'] : $this->services['cocorico.listing_discount_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingDiscountValidator(1, 90)) && false ?: '_'};
        }, 'Cocorico\\CoreBundle\\Validator\\Constraints\\ListingValidator' => function () {
            return ${($_ = isset($this->services['cocorico.listing_validator']) ? $this->services['cocorico.listing_validator'] : $this->load(__DIR__.'/getCocorico_ListingValidatorService.php')) && false ?: '_'};
        }, 'Cocorico\\CoreBundle\\Validator\\Constraints\\TimeRangesOverlapValidator' => function () {
            return ${($_ = isset($this->services['cocorico.times_range_overlap_validator']) ? $this->services['cocorico.times_range_overlap_validator'] : $this->services['cocorico.times_range_overlap_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\TimeRangesOverlapValidator()) && false ?: '_'};
        }, 'Cocorico\\TimeBundle\\Validator\\Constraints\\TimeRangesOverlapValidator' => function () {
            return ${($_ = isset($this->services['cocorico_time.times_range_overlap_validator']) ? $this->services['cocorico_time.times_range_overlap_validator'] : $this->services['cocorico_time.times_range_overlap_validator'] = new \Cocorico\TimeBundle\Validator\Constraints\TimeRangesOverlapValidator()) && false ?: '_'};
        }, 'Cocorico\\UserBundle\\Validator\\Constraints\\UserValidator' => function () {
            return ${($_ = isset($this->services['cocorico_user.user.validator']) ? $this->services['cocorico_user.user.validator'] : $this->services['cocorico_user.user.validator'] = new \Cocorico\UserBundle\Validator\Constraints\UserValidator(6, 1)) && false ?: '_'};
        }, 'FOS\\MessageBundle\\Validator\\AuthorizationValidator' => function () {
            return ${($_ = isset($this->services['fos_message.validator.authorization']) ? $this->services['fos_message.validator.authorization'] : $this->load(__DIR__.'/getFosMessage_Validator_AuthorizationService.php')) && false ?: '_'};
        }, 'FOS\\MessageBundle\\Validator\\ReplyAuthorizationValidator' => function () {
            return ${($_ = isset($this->services['fos_message.validator.reply_authorization']) ? $this->services['fos_message.validator.reply_authorization'] : $this->load(__DIR__.'/getFosMessage_Validator_ReplyAuthorizationService.php')) && false ?: '_'};
        }, 'FOS\\MessageBundle\\Validator\\SelfRecipientValidator' => function () {
            return ${($_ = isset($this->services['fos_message.validator.self_recipient']) ? $this->services['fos_message.validator.self_recipient'] : $this->load(__DIR__.'/getFosMessage_Validator_SelfRecipientService.php')) && false ?: '_'};
        }, 'FOS\\MessageBundle\\Validator\\SpamValidator' => function () {
            return ${($_ = isset($this->services['fos_message.validator.spam']) ? $this->services['fos_message.validator.spam'] : $this->load(__DIR__.'/getFosMessage_Validator_SpamService.php')) && false ?: '_'};
        }, 'Sonata\\CoreBundle\\Validator\\InlineValidator' => function () {
            return ${($_ = isset($this->services['sonata.core.validator.inline']) ? $this->services['sonata.core.validator.inline'] : $this->load(__DIR__.'/getSonata_Core_Validator_InlineService.php')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine_odm.mongodb.validator.unique']) ? $this->services['doctrine_odm.mongodb.validator.unique'] : $this->load(__DIR__.'/getDoctrineOdm_Mongodb_Validator_UniqueService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load(__DIR__.'/getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false)) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }, 'booking' => function () {
            return ${($_ = isset($this->services['cocorico.booking_validator']) ? $this->services['cocorico.booking_validator'] : $this->load(__DIR__.'/getCocorico_BookingValidatorService.php')) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load(__DIR__.'/getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'doctrine_odm.mongodb.unique' => function () {
            return ${($_ = isset($this->services['doctrine_odm.mongodb.validator.unique']) ? $this->services['doctrine_odm.mongodb.validator.unique'] : $this->load(__DIR__.'/getDoctrineOdm_Mongodb_Validator_UniqueService.php')) && false ?: '_'};
        }, 'fos_message.validator.authorization' => function () {
            return ${($_ = isset($this->services['fos_message.validator.authorization']) ? $this->services['fos_message.validator.authorization'] : $this->load(__DIR__.'/getFosMessage_Validator_AuthorizationService.php')) && false ?: '_'};
        }, 'fos_message.validator.reply_authorization' => function () {
            return ${($_ = isset($this->services['fos_message.validator.reply_authorization']) ? $this->services['fos_message.validator.reply_authorization'] : $this->load(__DIR__.'/getFosMessage_Validator_ReplyAuthorizationService.php')) && false ?: '_'};
        }, 'fos_message.validator.self_recipient' => function () {
            return ${($_ = isset($this->services['fos_message.validator.self_recipient']) ? $this->services['fos_message.validator.self_recipient'] : $this->load(__DIR__.'/getFosMessage_Validator_SelfRecipientService.php')) && false ?: '_'};
        }, 'fos_message.validator.spam' => function () {
            return ${($_ = isset($this->services['fos_message.validator.spam']) ? $this->services['fos_message.validator.spam'] : $this->load(__DIR__.'/getFosMessage_Validator_SpamService.php')) && false ?: '_'};
        }, 'listing' => function () {
            return ${($_ = isset($this->services['cocorico.listing_validator']) ? $this->services['cocorico.listing_validator'] : $this->load(__DIR__.'/getCocorico_ListingValidatorService.php')) && false ?: '_'};
        }, 'listing_availabilities_price' => function () {
            return ${($_ = isset($this->services['cocorico.listing_availabilities_price_validator']) ? $this->services['cocorico.listing_availabilities_price_validator'] : $this->services['cocorico.listing_availabilities_price_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilitiesPriceValidator(100)) && false ?: '_'};
        }, 'listing_availability' => function () {
            return ${($_ = isset($this->services['cocorico.listing_availability_validator']) ? $this->services['cocorico.listing_availability_validator'] : $this->services['cocorico.listing_availability_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilityValidator(100)) && false ?: '_'};
        }, 'listing_discount' => function () {
            return ${($_ = isset($this->services['cocorico.listing_discount_validator']) ? $this->services['cocorico.listing_discount_validator'] : $this->services['cocorico.listing_discount_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingDiscountValidator(1, 90)) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load(__DIR__.'/getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'sonata.admin.validator.inline' => function () {
            return ${($_ = isset($this->services['sonata.admin.validator.inline']) ? $this->services['sonata.admin.validator.inline'] : $this->load(__DIR__.'/getSonata_Admin_Validator_InlineService.php')) && false ?: '_'};
        }, 'sonata.core.validator.inline' => function () {
            return ${($_ = isset($this->services['sonata.core.validator.inline']) ? $this->services['sonata.core.validator.inline'] : $this->load(__DIR__.'/getSonata_Core_Validator_InlineService.php')) && false ?: '_'};
        }, 'time_ranges_overlap' => function () {
            return ${($_ = isset($this->services['cocorico_time.times_range_overlap_validator']) ? $this->services['cocorico_time.times_range_overlap_validator'] : $this->services['cocorico_time.times_range_overlap_validator'] = new \Cocorico\TimeBundle\Validator\Constraints\TimeRangesOverlapValidator()) && false ?: '_'};
        }, 'user' => function () {
            return ${($_ = isset($this->services['cocorico_user.user.validator']) ? $this->services['cocorico_user.user.validator'] : $this->services['cocorico_user.user.validator'] = new \Cocorico\UserBundle\Validator\Constraints\UserValidator(6, 1)) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, '^/(app(_[\\w]+)?\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'white_october_breadcrumbs.twig' shared service.
     *
     * @return \WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension
     */
    protected function getWhiteOctoberBreadcrumbs_TwigService()
    {
        return $this->services['white_october_breadcrumbs.twig'] = new \WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension($this);
    }

    public function getParameter($name)
    {
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'assetic.cache_dir' => false,
        'doctrine.orm.proxy_dir' => false,
        'jms_aop.cache_dir' => false,
        'jms_di_extra.cache_dir' => false,
        'jms_di_extra.doctrine_integration.entity_manager.file' => false,
        'doctrine_mongodb.odm.proxy_dir' => false,
        'doctrine_mongodb.odm.hydrator_dir' => false,
        'doctrine_mongodb.odm.persistent_collection_dir' => false,
        'oneup_uploader.chunks' => false,
        'oneup_uploader.orphanage' => false,
        'oneup_uploader.config' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/appDevDebugProjectContainer.xml'); break;
            case 'assetic.cache_dir': $value = ($this->targetDirs[0].'/assetic'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'jms_aop.cache_dir': $value = ($this->targetDirs[0].'/jms_aop'); break;
            case 'jms_di_extra.cache_dir': $value = ($this->targetDirs[0].'/jms_diextra'); break;
            case 'jms_di_extra.doctrine_integration.entity_manager.file': $value = ($this->targetDirs[0].'/jms_diextra/doctrine/EntityManager_5cf8f83b018c1.php'); break;
            case 'doctrine_mongodb.odm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/odm/mongodb/Proxies'); break;
            case 'doctrine_mongodb.odm.hydrator_dir': $value = ($this->targetDirs[0].'/doctrine/odm/mongodb/Hydrators'); break;
            case 'doctrine_mongodb.odm.persistent_collection_dir': $value = ($this->targetDirs[0].'/doctrine/odm/mongodb/PersistentCollections'); break;
            case 'oneup_uploader.chunks': $value = array(
                'maxage' => 604800,
                'storage' => array(
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'directory' => ($this->targetDirs[0].'/uploader/chunks'),
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                    'prefix' => 'chunks',
                ),
                'load_distribution' => true,
            ); break;
            case 'oneup_uploader.orphanage': $value = array(
                'maxage' => 604800,
                'directory' => ($this->targetDirs[0].'/uploader/orphanage'),
            ); break;
            case 'oneup_uploader.config': $value = array(
                'mappings' => array(
                    'listing_images' => array(
                        'max_size' => 10000000,
                        'frontend' => 'blueimp',
                        'allowed_mimetypes' => array(
                            0 => 'image/gif',
                            1 => 'image/jpg',
                            2 => 'image/jpeg',
                            3 => 'image/png',
                        ),
                        'enable_progress' => true,
                        'namer' => 'cocorico.namer.image_namer',
                        'storage' => array(
                            'directory' => '/cocorico/app/../web/uploads/listings/images/',
                            'service' => NULL,
                            'type' => 'filesystem',
                            'filesystem' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'endpoints' => array(
                            'upload' => NULL,
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_cancelation' => false,
                        'root_folder' => false,
                    ),
                    'user_images' => array(
                        'max_size' => 8000000,
                        'frontend' => 'blueimp',
                        'allowed_mimetypes' => array(
                            0 => 'image/gif',
                            1 => 'image/jpeg',
                            2 => 'image/png',
                        ),
                        'enable_progress' => true,
                        'namer' => 'cocorico.namer.image_namer',
                        'storage' => array(
                            'directory' => '/cocorico/app/../web/uploads/users/images/',
                            'service' => NULL,
                            'type' => 'filesystem',
                            'filesystem' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'endpoints' => array(
                            'upload' => NULL,
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_cancelation' => false,
                        'root_folder' => false,
                    ),
                ),
                'chunks' => array(
                    'maxage' => 604800,
                    'storage' => array(
                        'type' => 'filesystem',
                        'filesystem' => NULL,
                        'directory' => ($this->targetDirs[0].'/uploader/chunks'),
                        'stream_wrapper' => NULL,
                        'sync_buffer_size' => '100K',
                        'prefix' => 'chunks',
                    ),
                    'load_distribution' => true,
                ),
                'orphanage' => array(
                    'maxage' => 604800,
                    'directory' => ($this->targetDirs[0].'/uploader/orphanage'),
                ),
                'twig' => true,
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = array(
        'a2lix_translation_form.default.listener.translationsforms.class' => 'a2lix_translation_form.default.listener.translationsForms.class',
        'a2lix_translation_form.default.type.translationsfields.class' => 'a2lix_translation_form.default.type.translationsFields.class',
        'a2lix_translation_form.default.type.translationsforms.class' => 'a2lix_translation_form.default.type.translationsForms.class',
        'a2lix_translation_form.default.type.translationslocalesselector.class' => 'a2lix_translation_form.default.type.translationsLocalesSelector.class',
        'a2lix_translation_form.default.type.translatedentity.class' => 'a2lix_translation_form.default.type.translatedEntity.class',
    );

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since version 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/cocorico/app',
            'kernel.project_dir' => '/cocorico',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle',
                'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle',
                'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle',
                'BazingaGeocoderBundle' => 'Bazinga\\GeocoderBundle\\BazingaGeocoderBundle',
                'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle',
                'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle',
                'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle',
                'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle',
                'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle',
                'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle',
                'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle',
                'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle',
                'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle',
                'CocoricoSonataUserBundle' => 'Cocorico\\SonataUserBundle\\CocoricoSonataUserBundle',
                'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle',
                'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle',
                'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle',
                'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle',
                'CocoricoTimeBundle' => 'Cocorico\\TimeBundle\\CocoricoTimeBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle',
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle',
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle',
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/monolog-bundle',
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/swiftmailer-bundle',
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/assetic-bundle',
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sensio/framework-extra-bundle',
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/doctrine/doctrine-bundle',
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/doctrine/doctrine-migrations-bundle',
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'JMSI18nRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/i18n-routing-bundle/JMS/I18nRoutingBundle',
                    'namespace' => 'JMS\\I18nRoutingBundle',
                ),
                'JMSTranslationBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/translation-bundle/JMS/TranslationBundle',
                    'namespace' => 'JMS\\TranslationBundle',
                ),
                'JMSAopBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/aop-bundle',
                    'namespace' => 'JMS\\AopBundle',
                ),
                'JMSDiExtraBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/di-extra-bundle',
                    'namespace' => 'JMS\\DiExtraBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/friendsofsymfony/user-bundle',
                    'namespace' => 'FOS\\UserBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/stof/doctrine-extensions-bundle',
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'DoctrineMongoDBBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/doctrine/mongodb-odm-bundle',
                    'namespace' => 'Doctrine\\Bundle\\MongoDBBundle',
                ),
                'SonataAdminBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/admin-bundle/src',
                    'namespace' => 'Sonata\\AdminBundle',
                ),
                'SonataCoreBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/core-bundle/src',
                    'namespace' => 'Sonata\\CoreBundle',
                ),
                'SonataBlockBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/block-bundle/src',
                    'namespace' => 'Sonata\\BlockBundle',
                ),
                'SonataEasyExtendsBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/easy-extends-bundle/src',
                    'namespace' => 'Sonata\\EasyExtendsBundle',
                ),
                'SonataDoctrineORMAdminBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/doctrine-orm-admin-bundle/src',
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ),
                'SonataUserBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/user-bundle/src',
                    'namespace' => 'Sonata\\UserBundle',
                ),
                'A2lixTranslationFormBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle',
                    'namespace' => 'A2lix\\TranslationFormBundle',
                ),
                'OneupUploaderBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/oneup/uploader-bundle/Oneup/UploaderBundle',
                    'namespace' => 'Oneup\\UploaderBundle',
                ),
                'LiipImagineBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/liip/imagine-bundle',
                    'namespace' => 'Liip\\ImagineBundle',
                ),
                'LexikCurrencyBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/lexik/currency-bundle',
                    'namespace' => 'Lexik\\Bundle\\CurrencyBundle',
                ),
                'BazingaGeocoderBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/willdurand/geocoder-bundle',
                    'namespace' => 'Bazinga\\GeocoderBundle',
                ),
                'FOSMessageBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle',
                    'namespace' => 'FOS\\MessageBundle',
                ),
                'KnpMenuBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/knplabs/knp-menu-bundle/src',
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'WhiteOctoberBreadcrumbsBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle',
                    'namespace' => 'WhiteOctober\\BreadcrumbsBundle',
                ),
                'HWIOAuthBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/hwi/oauth-bundle',
                    'namespace' => 'HWI\\Bundle\\OAuthBundle',
                ),
                'IvoryCKEditorBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/egeloen/ckeditor-bundle',
                    'namespace' => 'Ivory\\CKEditorBundle',
                ),
                'FMElfinderBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/helios-ag/fm-elfinder-bundle',
                    'namespace' => 'FM\\ElfinderBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/doctrine/doctrine-fixtures-bundle',
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'SimpleThingsEntityAuditBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit',
                    'namespace' => 'SimpleThings\\EntityAudit',
                ),
                'CocoricoCoreBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/CoreBundle',
                    'namespace' => 'Cocorico\\CoreBundle',
                ),
                'CocoricoGeoBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/GeoBundle',
                    'namespace' => 'Cocorico\\GeoBundle',
                ),
                'CocoricoUserBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/UserBundle',
                    'namespace' => 'Cocorico\\UserBundle',
                ),
                'CocoricoPageBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/PageBundle',
                    'namespace' => 'Cocorico\\PageBundle',
                ),
                'CocoricoCMSBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/CMSBundle',
                    'namespace' => 'Cocorico\\CMSBundle',
                ),
                'CocoricoBreadcrumbBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/BreadcrumbBundle',
                    'namespace' => 'Cocorico\\BreadcrumbBundle',
                ),
                'CocoricoSonataAdminBundle' => array(
                    'parent' => 'SonataAdminBundle',
                    'path' => '/cocorico/src/Cocorico/SonataAdminBundle',
                    'namespace' => 'Cocorico\\SonataAdminBundle',
                ),
                'CocoricoSonataUserBundle' => array(
                    'parent' => 'SonataUserBundle',
                    'path' => '/cocorico/src/Cocorico/SonataUserBundle',
                    'namespace' => 'Cocorico\\SonataUserBundle',
                ),
                'CocoricoMessageBundle' => array(
                    'parent' => 'FOSMessageBundle',
                    'path' => '/cocorico/src/Cocorico/MessageBundle',
                    'namespace' => 'Cocorico\\MessageBundle',
                ),
                'CocoricoContactBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/ContactBundle',
                    'namespace' => 'Cocorico\\ContactBundle',
                ),
                'CocoricoReviewBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/ReviewBundle',
                    'namespace' => 'Cocorico\\ReviewBundle',
                ),
                'CocoricoConfigBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/ConfigBundle',
                    'namespace' => 'Cocorico\\ConfigBundle',
                ),
                'CocoricoTimeBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/TimeBundle',
                    'namespace' => 'Cocorico\\TimeBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle',
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle',
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sensio/distribution-bundle',
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'DeployBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/hpatoio/deploy-bundle/Hpatoio/DeployBundle',
                    'namespace' => 'Hpatoio\\DeployBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sensio/generator-bundle',
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'cocorico.site_name' => 'Costocking.com',
            'cocorico.phone' => '+33(0) 7 77 98 93 52',
            'cocorico.address' => NULL,
            'cocorico.short_description' => 'Costocking est la marketplace de services logistique',
            'cocorico.contact_mail' => 'contact@costocking.com',
            'cocorico.contact_mail_obfuscated' => '&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#099;&#111;&#099;&#111;&#114;&#105;&#099;&#111;&#046;&#105;&#111;',
            'cocorico.from_email' => 'no-reply@cocorico.io',
            'cocorico.webmaster_email' => 'webmaster@cocorico.io',
            'cocorico.vat_number' => 'FR 12 123 456 789',
            'cocorico.home_rss_feed' => '',
            'locale' => 'fr',
            'cocorico.locale' => 'fr',
            'cocorico.locales' => array(
                0 => 'en',
                1 => 'fr',
            ),
            'cocorico.locales_string' => 'en|fr',
            'cocorico.currency' => 'EUR',
            'cocorico.currencies_for_lexik' => array(
                0 => 'EUR',
                1 => 'USD',
                2 => 'GBP',
                3 => 'CHF',
                4 => 'CAD',
                5 => 'JPY',
                6 => 'RUB',
                7 => 'AUD',
            ),
            'cocorico.currencies' => array(
                'EUR' => '€',
                'USD' => '$',
                'GBP' => '£',
                'CHF' => 'CHF',
                'CAD' => '$ CAD',
                'JPY' => '¥',
                'RUB' => 'руб',
                'AUD' => '$ AUD',
            ),
            'cocorico.currencies_string' => 'EUR|USD|GBP|CHF|CAD|JPY|RUB|RUB|AUD',
            'cocorico.currencies_json' => '/cocorico/app/../web/json/currencies.json',
            'cocorico.include_vat' => false,
            'cocorico.display_vat' => true,
            'cocorico.vat' => 0.2,
            'cocorico.registration_confirmation' => false,
            'cocorico.fee_as_asker' => 0.1,
            'cocorico.fee_as_offerer' => 0.05,
            'cocorico.time_unit' => 1440,
            'cocorico.time_zone' => 'Europe/Paris',
            'cocorico.days_max' => 360,
            'cocorico.days_max_edition' => 360,
            'cocorico.days_display_mode' => 'range',
            'cocorico.time_hours_available' => array(
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8,
                9 => 9,
                10 => 10,
                11 => 11,
                12 => 12,
                13 => 13,
                14 => 14,
                15 => 15,
                16 => 16,
                17 => 17,
                18 => 18,
                19 => 19,
                20 => 20,
                21 => 21,
                22 => 22,
                23 => 23,
            ),
            'cocorico.time_unit_flexibility' => 0,
            'cocorico.time_unit_allday' => true,
            'cocorico.times_max' => 8,
            'cocorico.times_display_mode' => 'duration',
            'cocorico.dashboard_max_per_page' => 10,
            'cocorico.message_max_per_page' => 10,
            'cocorico.review_max_per_page' => 10,
            'cocorico.listing_new_is_published' => 1,
            'cocorico.listing_countries' => array(

            ),
            'cocorico.listing_favorite_countries' => array(
                0 => 'FR',
            ),
            'cocorico.listing_category_min' => 1,
            'cocorico.listing_price_precision' => 2,
            'cocorico.listing_price_min' => 100,
            'cocorico.listing_price_max' => 11000,
            'cocorico.listing_map_display_marker' => false,
            'cocorico.listing_discount_min' => 1,
            'cocorico.listing_discount_max' => 90,
            'cocorico.listing_search_max_per_page' => 10,
            'cocorico.listing_search_min_result' => 0,
            'cocorico.listing.duplication' => true,
            'cocorico.listing_availability_status' => 1,
            'cocorico.booking_price_min' => 500,
            'cocorico.booking.allow_single_day' => true,
            'cocorico.booking.end_day_included' => true,
            'cocorico.booking.min_start_delay' => 0,
            'cocorico.booking.min_start_time_delay' => 720,
            'cocorico.booking.expiration_delay' => 2880,
            'cocorico.booking.acceptation_delay' => 240,
            'cocorico.booking.alert_expiration_delay' => 120,
            'cocorico.booking.alert_imminent_delay' => 1440,
            'cocorico.booking.validated_moment' => 'start',
            'cocorico.booking.validated_delay' => 0,
            'cocorico.bankwire_checking_simulation' => false,
            'cocorico.booking.cancelation_policy' => array(
                'flexible' => array(
                    'time_before_start' => 86400,
                    'refund_min' => 0.5,
                    'refund_max' => 1,
                ),
                'strict' => array(
                    'time_before_start' => 86400,
                    'refund_min' => 0,
                    'refund_max' => 0.5,
                ),
            ),
            'cocorico_listing_option.listing_option.entity_class' => 'none',
            'cocorico_listing_option.booking_option.entity_class' => 'none',
            'cocorico_listing_alert.entity_class' => 'none',
            'cocorico_listing_category_field.entity_class' => 'none',
            'cocorico_listing_category_field_value.entity_class' => 'none',
            'cocorico_listing_category_listing_category_field.entity_class' => 'none',
            'cocorico_listing_deposit.booking_deposit_refund.entity_class' => 'none',
            'cocorico_mangopay_card_saving.user_card.entity_class' => 'none',
            'cocorico_config.parameters_allowed' => array(
                'cocorico.fee_as_asker' => array(
                    'type' => 'percent',
                ),
                'cocorico.fee_as_offerer' => array(
                    'type' => 'percent',
                ),
                'cocorico.check_translation' => array(
                    'type' => 'text',
                ),
            ),
            'cocorico.user_address_delivery' => true,
            'cocorico.user_img_min' => 1,
            'cocorico.user_img_max' => 6,
            'cocorico.user_img_max_upload_size' => 12,
            'cocorico.user_img_xsmall_w' => 60,
            'cocorico.user_img_xsmall_h' => 45,
            'cocorico.user_img_small_w' => 150,
            'cocorico.user_img_small_h' => 112,
            'cocorico.user_img_medium_w' => 200,
            'cocorico.user_img_medium_h' => 150,
            'cocorico.user_img_contact_w' => 213,
            'cocorico.user_img_contact_h' => 160,
            'cocorico.user_img_profile_w' => 308,
            'cocorico.user_img_profile_h' => 231,
            'cocorico.listing_img_min' => 1,
            'cocorico.listing_img_max' => 24,
            'cocorico.listing_img_max_upload_size' => 12,
            'cocorico.listing_img_xsmall_w' => 90,
            'cocorico.listing_img_xsmall_h' => 67,
            'cocorico.listing_img_small_w' => 100,
            'cocorico.listing_img_small_h' => 75,
            'cocorico.listing_img_xxmedium_w' => 150,
            'cocorico.listing_img_xxmedium_h' => 112,
            'cocorico.listing_img_xmedium_w' => 200,
            'cocorico.listing_img_xmedium_h' => 150,
            'cocorico.listing_img_medium_w' => 275,
            'cocorico.listing_img_medium_h' => 206,
            'cocorico.listing_img_large_w' => 384,
            'cocorico.listing_img_large_h' => 288,
            'cocorico.listing_img_xlarge_w' => 527,
            'cocorico.listing_img_xlarge_h' => 395,
            'cocorico.listing_img_xxlarge_w' => 680,
            'cocorico.listing_img_xxlarge_h' => 510,
            'cocorico.upload_image_w' => 120,
            'cocorico.upload_image_h' => 90,
            'cocorico.listing_new_map_w' => 100,
            'cocorico.listing_new_map_h' => 300,
            'cocorico.listing_edit_map_w' => 100,
            'cocorico.listing_edit_map_h' => 418,
            'cocorico.listing_show_map_w' => 100,
            'cocorico.listing_show_map_h' => 480,
            'cocorico.listing_search_map_w' => '100%',
            'cocorico.listing_search_map_h' => 1000,
            'cocorico.assets_base_urls' => 'http://192.168.229.159',
            'router.request_context.host' => '192.168.229.159',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'cocorico.admin' => 'admin',
            'cocorico.admin_translation' => false,
            'cocorico.check_translation' => false,
            'cocorico.translator.secret.key' => NULL,
            'cocorico.translator.translate.url' => 'http://api.microsofttranslator.com/v2/Http.svc/TranslateArray',
            'cocorico.translator.token.url' => 'https://api.cognitive.microsoft.com/sts/v1.0/issueToken',
            'cocorico.facebook.app_id' => 352775691816092,
            'cocorico.facebook.secret' => 'b9bbb15df57211e79d8f45782e7c1775',
            'cocorico.image_driver' => 'imagick',
            'cocorico.google_analytics' => 'UA',
            'cocorico.google_tag_manager' => false,
            'cocorico_geo.google_place_api_key' => 'AIzaSyAvng_eh8UKyAf4c_47EKdcWTj4jhvT-6U',
            'cocorico_geo.google_place_server_api_key' => 'AIzaSyASijJ05pLq3ha4mKrriQsJcTQUHQgFMd0',
            'cocorico_geo.ipinfodb_api_key' => NULL,
            'cocorico.deploy.host' => '185.62.185.32',
            'cocorico.deploy.dir' => '/var/www/demo.costocking.com',
            'cocorico.deploy.user' => 'debian',
            'cocorico_mangopay.client_id' => NULL,
            'cocorico_mangopay.client_password' => NULL,
            'cocorico_mangopay.base_url' => 'https://api.sandbox.mangopay.com',
            'cocorico_mangopay.debug' => false,
            'cocorico_mangopay.temporary_folder' => '/cocorico/app/../tmp/mangopay/',
            'cocorico_sms.enabled' => false,
            'cocorico_sms.phone_check' => false,
            'cocorico_sms.thread_notification' => false,
            'cocorico_sms.ovh_endpoint_name' => 'ovh-eu',
            'cocorico_sms.ovh_application_key' => NULL,
            'cocorico_sms.ovh_application_secret' => NULL,
            'cocorico_sms.ovh_consumer_key' => NULL,
            'cocorico_sms.ovh_service_name' => NULL,
            'cocorico_sms.ovh_debug' => false,
            'cocorico_listing_deposit.booking.deposit_refund_delay' => NULL,
            'cocorico_listing_deposit.listing.min_deposit_amount' => NULL,
            'cocorico_elasticsearch.keyword_delimiter' => ' ',
            'cocorico_elasticsearch.listing_title_boost' => 5,
            'cocorico_elasticsearch.listing_description_boost' => 5,
            'cocorico_elasticsearch.listing_category_names_boost' => 5,
            'cocorico_elasticsearch.listing_user_description_boost' => 5,
            'database_host' => 'localhost',
            'database_port' => 3306,
            'database_name' => 'costocking_dev',
            'database_user' => 'cocorico',
            'database_password' => 'cocorico',
            'mongodb_server' => 'mongodb://localhost:27017',
            'mongodb_database_name' => 'costocking_dev',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'mailer_port' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'use_assetic_controller' => false,
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Cocorico\\CoreBundle\\Listener\\ResolveTargetEntityListener',
            'cocorico.listing_activated_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:listing_activated_offerer.txt.twig',
            'cocorico.booking_request_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_offerer.txt.twig',
            'cocorico.booking_request_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_request_asker.txt.twig',
            'cocorico.booking_accepted_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_accepted_offerer.txt.twig',
            'cocorico.booking_accepted_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_accepted_asker.txt.twig',
            'cocorico.booking_refused_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_refused_offerer.txt.twig',
            'cocorico.booking_refused_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_refused_asker.txt.twig',
            'cocorico.booking_request_expired_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_request_expired_asker.txt.twig',
            'cocorico.booking_request_expired_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_expired_offerer.txt.twig',
            'cocorico.booking_canceled_by_asker_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_canceled_by_asker_offerer.txt.twig',
            'cocorico.booking_canceled_by_asker_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_canceled_by_asker_asker.txt.twig',
            'cocorico.booking_imminent_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_imminent_offerer.txt.twig',
            'cocorico.booking_imminent_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_imminent_asker.txt.twig',
            'cocorico.booking_request_expiration_alert_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_expiration_alert_offerer.txt.twig',
            'cocorico.reminder_to_rate_asker_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:reminder_to_rate_asker_offerer.txt.twig',
            'cocorico.booking_bank_wire_transfer_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_bank_wire_transfer_offerer.txt.twig',
            'cocorico.update_your_calendar_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:update_your_calendar_offerer.txt.twig',
            'cocorico.payment_error_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:payment_error_asker.txt.twig',
            'cocorico.reminder_to_rate_offerer_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:reminder_to_rate_offerer_asker.txt.twig',
            'cocorico.admin_message.email.template' => 'CocoricoCoreBundle:Mails:admin_message.txt.twig',
            'knp.doctrine_behaviors.reflection.class_analyzer.class' => 'Knp\\DoctrineBehaviors\\Reflection\\ClassAnalyzer',
            'knp.doctrine_behaviors.reflection.is_recursive' => true,
            'knp.doctrine_behaviors.translatable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\TranslatableSubscriber',
            'knp.doctrine_behaviors.translatable_subscriber.current_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\CurrentLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.default_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\DefaultLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable',
            'knp.doctrine_behaviors.translatable_subscriber.translation_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_fetch_method' => 'EAGER',
            'knp.doctrine_behaviors.translatable_subscriber.translation_fetch_method' => 'EAGER',
            'knp.doctrine_behaviors.softdeletable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\SoftDeletable\\SoftDeletableSubscriber',
            'knp.doctrine_behaviors.softdeletable_subscriber.softdeletable_trait' => 'Knp\\DoctrineBehaviors\\Model\\SoftDeletable\\SoftDeletable',
            'knp.doctrine_behaviors.timestampable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Timestampable\\TimestampableSubscriber',
            'knp.doctrine_behaviors.timestampable_subscriber.timestampable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Timestampable\\Timestampable',
            'knp.doctrine_behaviors.timestampable_subscriber.db_field_type' => 'datetime',
            'knp.doctrine_behaviors.blameable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\BlameableSubscriber',
            'knp.doctrine_behaviors.blameable_subscriber.blameable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Blameable\\Blameable',
            'knp.doctrine_behaviors.blameable_subscriber.user_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\UserCallable',
            'knp.doctrine_behaviors.blameable_subscriber.user_entity' => NULL,
            'knp.doctrine_behaviors.loggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggableSubscriber',
            'knp.doctrine_behaviors.loggable_subscriber.logger_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggerCallable',
            'knp.doctrine_behaviors.geocodable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Geocodable\\GeocodableSubscriber',
            'knp.doctrine_behaviors.geocodable_subscriber.geocodable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Geocodable\\Geocodable',
            'knp.doctrine_behaviors.sluggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sluggable\\SluggableSubscriber',
            'knp.doctrine_behaviors.sluggable_subscriber.sluggable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sluggable\\Sluggable',
            'knp.doctrine_behaviors.tree_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Tree\\TreeSubscriber',
            'knp.doctrine_behaviors.tree_subscriber.tree_trait' => 'Knp\\DoctrineBehaviors\\Model\\Tree\\Node',
            'knp.doctrine_behaviors.sortable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sortable\\SortableSubscriber',
            'knp.doctrine_behaviors.sortable_subscriber.sortable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sortable\\Sortable',
            'lexik_currency.doctrine_adapter.class' => 'Cocorico\\CurrencyBundle\\Adapter\\DoctrineCurrencyAdapter',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'fr',
            'templating.helper.code.file_link_format' => 'phpstorm://open?file=%f&line=%l',
            'debug.file_link_format' => 'phpstorm://open?file=%f&line=%l',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'name' => '_csess',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'translator.default_path' => '/cocorico/translations',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.resource' => '/cocorico/app/config/routing_dev.yml',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'hwi_oauth.resource_ownermap.configured.main' => array(
                'facebook' => '/fr/oauth/fb-login',
            ),
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'FMElfinderBundle:Form:elfinder_widget.html.twig',
                1 => '@IvoryCKEditor/Form/ckeditor_widget.html.twig',
                2 => 'form_div_layout.html.twig',
                3 => 'SonataUserBundle:Form:form_admin_fields.html.twig',
                4 => 'CocoricoCoreBundle:Form:fields.html.twig',
                5 => 'CocoricoCoreBundle:Form:fields_collection.html.twig',
                6 => 'CocoricoCoreBundle:Form:fields_category.html.twig',
                7 => 'CocoricoCoreBundle:Form:fields_price.html.twig',
                8 => 'SonataCoreBundle:Form:datepicker.html.twig',
                9 => 'CocoricoTimeBundle:Form:fields_date_time.html.twig',
                10 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
                11 => 'CocoricoCoreBundle:Form:fields_translations.html.twig',
            ),
            'twig.default_path' => '/cocorico/templates',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.file.path' => '/cocorico/app/spool/default',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.bundles' => array(
                0 => 'CocoricoCoreBundle',
                1 => 'CocoricoUserBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/cocorico/app/../web',
            'assetic.write_to' => '/cocorico/app/../web',
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.jsqueeze.single_line' => true,
            'assetic.filter.jsqueeze.keep_important_comments' => true,
            'assetic.filter.jsqueeze.special_var_rx' => false,
            'assetic.twig_extension.functions' => array(

            ),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'json' => array(
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => '/cocorico/app/DoctrineMigrations',
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'jms_i18n_routing.router.class' => 'JMS\\I18nRoutingBundle\\Router\\I18nRouter',
            'jms_i18n_routing.locale_resolver.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultLocaleResolver',
            'jms_i18n_routing.loader.class' => 'JMS\\I18nRoutingBundle\\Router\\I18nLoader',
            'jms_i18n_routing.route_exclusion_strategy.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultRouteExclusionStrategy',
            'jms_i18n_routing.pattern_generation_strategy.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultPatternGenerationStrategy',
            'jms_i18n_routing.locale_choosing_listener.class' => 'JMS\\I18nRoutingBundle\\EventListener\\LocaleChoosingListener',
            'jms_i18n_routing.cookie_setting_listener.class' => 'JMS\\I18nRoutingBundle\\EventListener\\CookieSettingListener',
            'jms_i18n_routing.route_translation_extractor.class' => 'JMS\\I18nRoutingBundle\\Translation\\RouteTranslationExtractor',
            'jms_i18n_routing.default_locale' => 'fr',
            'jms_i18n_routing.locales' => array(
                0 => 'en',
                1 => 'fr',
            ),
            'jms_i18n_routing.catalogue' => 'routes',
            'jms_i18n_routing.strategy' => 'prefix',
            'jms_i18n_routing.redirect_to_host' => true,
            'jms_i18n_routing.cookie.name' => 'hl',
            'jms_translation.extractor_manager.class' => 'JMS\\TranslationBundle\\Translation\\ExtractorManager',
            'jms_translation.extractor.file_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\FileExtractor',
            'jms_translation.extractor.file.default_php_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\DefaultPhpFileExtractor',
            'jms_translation.extractor.file.translation_container_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TranslationContainerExtractor',
            'jms_translation.extractor.file.form_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\FormExtractor',
            'jms_translation.extractor.file.validation_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\ValidationExtractor',
            'jms_translation.extractor.file.authentication_message_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\AuthenticationMessagesExtractor',
            'jms_translation.loader.symfony.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\Symfony\\XliffLoader',
            'jms_translation.loader.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\XliffLoader',
            'jms_translation.loader.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\SymfonyLoaderAdapter',
            'jms_translation.loader_manager.class' => 'JMS\\TranslationBundle\\Translation\\LoaderManager',
            'jms_translation.dumper.php_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\PhpDumper',
            'jms_translation.dumper.xliff_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\XliffDumper',
            'jms_translation.dumper.yaml_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\YamlDumper',
            'jms_translation.dumper.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\SymfonyDumperAdapter',
            'jms_translation.file_writer.class' => 'JMS\\TranslationBundle\\Translation\\FileWriter',
            'jms_translation.updater.class' => 'JMS\\TranslationBundle\\Translation\\Updater',
            'jms_translation.config_factory.class' => 'JMS\\TranslationBundle\\Translation\\ConfigFactory',
            'jms_translation.file_source_factory.class' => 'JMS\\TranslationBundle\\Translation\\FileSourceFactory',
            'jms_translation.extractor.file.twig_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\Twig2FileExtractor',
            'jms_translation.twig_extension.class' => 'JMS\\TranslationBundle\\Twig2\\TranslationExtension',
            'jms_translation.source_language' => 'en',
            'jms_translation.locales' => array(

            ),
            'jms_translation.dumper.add_references' => false,
            'jms_translation.dumper.add_date' => false,
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'jms_di_extra.metadata.driver.annotation_driver.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_di_extra.metadata.driver.configured_controller_injections.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\ConfiguredControllerInjectionsDriver',
            'jms_di_extra.metadata.driver.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_di_extra.service_naming_strategy.default.class' => 'JMS\\DiExtraBundle\\Metadata\\DefaultNamingStrategy',
            'jms_di_extra.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_di_extra.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_di_extra.metadata.converter.class' => 'JMS\\DiExtraBundle\\Metadata\\MetadataConverter',
            'jms_di_extra.controller_resolver.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerResolver',
            'jms_di_extra.controller_injectors_warmer.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerInjectorsWarmer',
            'jms_di_extra.all_bundles' => false,
            'jms_di_extra.bundles' => array(

            ),
            'jms_di_extra.directories' => array(

            ),
            'jms_di_extra.disable_grep' => false,
            'jms_di_extra.doctrine_integration' => true,
            'jms_di_extra.annotation_patterns' => array(
                0 => 'JMS\\DiExtraBundle\\Annotation',
                1 => 'Sonata\\AdminBundle\\Annotation',
            ),
            'jms_di_extra.cache_warmer.controller_file_blacklist' => array(

            ),
            'jms_di_extra.doctrine_integration.entity_manager.class' => 'EntityManager5cf8f83b018c1_546a8d27f194334ee012bfe64f629947b07e4919\\__CG__\\Doctrine\\ORM\\EntityManager',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Cocorico\\UserBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'Cocorico\\UserBundle\\Form\\Type\\ProfileAboutMeFormType',
            'fos_user.profile.form.name' => 'user_profile',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'CocoricoProfile',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'no-reply@cocorico.io' => 'Costocking.com',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'Cocorico\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'user_registration',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'CocoricoRegistration',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'no-reply@cocorico.io' => 'Costocking.com',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'Cocorico\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'user_resetting',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Cocorico\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'fr',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'doctrine_mongodb.odm.connection.class' => 'Doctrine\\MongoDB\\Connection',
            'doctrine_mongodb.odm.configuration.class' => 'Doctrine\\ODM\\MongoDB\\Configuration',
            'doctrine_mongodb.odm.document_manager.class' => 'Doctrine\\ODM\\MongoDB\\DocumentManager',
            'doctrine_mongodb.odm.manager_configurator.class' => 'Doctrine\\Bundle\\MongoDBBundle\\ManagerConfigurator',
            'doctrine_mongodb.odm.logger.class' => 'Doctrine\\Bundle\\MongoDBBundle\\Logger\\Logger',
            'doctrine_mongodb.odm.logger.aggregate.class' => 'Doctrine\\Bundle\\MongoDBBundle\\Logger\\AggregateLogger',
            'doctrine_mongodb.odm.data_collector.standard.class' => 'Doctrine\\Bundle\\MongoDBBundle\\DataCollector\\StandardDataCollector',
            'doctrine_mongodb.odm.data_collector.pretty.class' => 'Doctrine\\Bundle\\MongoDBBundle\\DataCollector\\PrettyDataCollector',
            'doctrine_mongodb.odm.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine_odm.mongodb.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine_odm.mongodb.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine_mongodb.odm.class' => 'Doctrine\\Bundle\\MongoDBBundle\\ManagerRegistry',
            'doctrine_mongodb.odm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine_mongodb.odm.proxy_cache_warmer.class' => 'Doctrine\\Bundle\\MongoDBBundle\\CacheWarmer\\ProxyCacheWarmer',
            'doctrine_mongodb.odm.hydrator_cache_warmer.class' => 'Doctrine\\Bundle\\MongoDBBundle\\CacheWarmer\\HydratorCacheWarmer',
            'doctrine_mongodb.odm.persistent_collection_cache_warmer.class' => 'Doctrine\\Bundle\\MongoDBBundle\\CacheWarmer\\PersistentCollectionCacheWarmer',
            'doctrine_mongodb.odm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_mongodb.odm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_mongodb.odm.cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_mongodb.odm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_mongodb.odm.cache.memcache_host' => 'localhost',
            'doctrine_mongodb.odm.cache.memcache_port' => 11211,
            'doctrine_mongodb.odm.cache.memcache_instance.class' => 'Memcache',
            'doctrine_mongodb.odm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_mongodb.odm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine_mongodb.odm.metadata.annotation.class' => 'Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\AnnotationDriver',
            'doctrine_mongodb.odm.metadata.xml.class' => 'Doctrine\\Bundle\\MongoDBBundle\\Mapping\\Driver\\XmlDriver',
            'doctrine_mongodb.odm.metadata.yml.class' => 'Doctrine\\Bundle\\MongoDBBundle\\Mapping\\Driver\\YamlDriver',
            'doctrine_mongodb.odm.mapping_dirs' => array(

            ),
            'doctrine_mongodb.odm.xml_mapping_dirs' => array(

            ),
            'doctrine_mongodb.odm.yml_mapping_dirs' => array(

            ),
            'doctrine_mongodb.odm.document_dirs' => array(

            ),
            'doctrine_mongodb.odm.fixtures_dirs' => array(

            ),
            'doctrine_mongodb.odm.logger.batch_insert_threshold' => 4,
            'doctrine_mongodb.odm.listeners.resolve_target_document.class' => 'Doctrine\\ODM\\MongoDB\\Tools\\ResolveTargetDocumentListener',
            'doctrine_mongodb.odm.default_connection' => 'default',
            'doctrine_mongodb.odm.default_document_manager' => 'default',
            'doctrine_mongodb.odm.proxy_namespace' => 'MongoDBODMProxies',
            'doctrine_mongodb.odm.auto_generate_proxy_classes' => 0,
            'doctrine_mongodb.odm.hydrator_namespace' => 'Hydrators',
            'doctrine_mongodb.odm.auto_generate_hydrator_classes' => 0,
            'doctrine_mongodb.odm.default_commit_options' => array(

            ),
            'doctrine_mongodb.odm.persistent_collection_namespace' => 'PersistentCollections',
            'doctrine_mongodb.odm.auto_generate_persistent_collection_classes' => 0,
            'doctrine_mongodb.odm.fixture_loader' => 'Symfony\\Bridge\\Doctrine\\DataFixtures\\ContainerAwareLoader',
            'doctrine_mongodb.odm.connections' => array(
                'default' => 'doctrine_mongodb.odm.default_connection',
            ),
            'doctrine_mongodb.odm.document_managers' => array(
                'default' => 'doctrine_mongodb.odm.default_document_manager',
            ),
            'sonata.admin.twig.extension.x_editable_type_mapping' => array(
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ),
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.templates' => array(
                'user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig',
                'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig',
                'add_block' => 'SonataAdminBundle:Core:add_block.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => 'SonataAdminBundle:CRUD:list_outer_rows_tree.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
                'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig',
                'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig',
                'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig',
                'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig',
                'button_create' => 'SonataAdminBundle:Button:create_button.html.twig',
                'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig',
                'button_history' => 'SonataAdminBundle:Button:history_button.html.twig',
                'button_list' => 'SonataAdminBundle:Button:list_button.html.twig',
                'button_show' => 'SonataAdminBundle:Button:show_button.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(

            ),
            'sonata.admin.configuration.dashboard_blocks' => array(

            ),
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.breadcrumbs' => array(
                'child_admin_route' => 'edit',
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.role_admin' => 'ROLE_SONATA_ADMIN',
            'sonata.admin.configuration.security.role_super_admin' => 'ROLE_SUPER_ADMIN',
            'sonata.admin.configuration.security.information' => array(

            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
                'uses' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.show.mosaic.button' => true,
            'sonata.admin.configuration.translate_group_label' => false,
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.core.form.mapping.type' => array(

            ),
            'sonata.core.form.mapping.extension' => array(

            ),
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.admin.block.search_result' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.user.block.menu' => array(
                    'contexts' => array(
                        0 => 'cms',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.user.block.account' => array(
                    'contexts' => array(
                        0 => 'cms',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.block.service.text' => array(
                    'contexts' => array(
                        0 => 'cms',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.admin.block.search_result' => 'sonata.cache.noop',
                    'sonata.user.block.menu' => 'sonata.cache.noop',
                    'sonata.user.block.account' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                ),
            ),
            'sonata_doctrine_orm_admin.audit.force' => false,
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:list_email.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:list_html.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:show_email.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:show_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:show_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:show_html.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'sonata.user.admin.groupname' => 'Users',
            'sonata.user.admin.label_catalogue' => 'SonataUserBundle',
            'sonata.user.admin.groupicon' => '<i class=\'fa fa-users\'></i>',
            'sonata.user.admin.user.class' => 'Cocorico\\UserBundle\\Admin\\UserAdmin',
            'sonata.user.admin.group.class' => 'Cocorico\\UserBundle\\Admin\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'Cocorico\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'Cocorico\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'CocoricoUserBundle:Admin\\UserAdmin',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.default_avatar' => 'bundles/sonatauser/default_avatar.png',
            'sonata.user.impersonating' => array(
                'route' => 'cocorico_home',
                'parameters' => array(

                ),
            ),
            'sonata.user.google.authenticator.enabled' => false,
            'a2lix_translation_form.locales' => array(
                0 => 'en',
                1 => 'fr',
            ),
            'a2lix_translation_form.required_locales' => array(
                0 => 'en',
                1 => 'fr',
            ),
            'a2lix_translation_form.default.service.translation.class' => 'A2lix\\TranslationFormBundle\\TranslationForm\\TranslationForm',
            'a2lix_translation_form.default.service.parameter_locale_provider.class' => 'A2lix\\TranslationFormBundle\\Locale\\DefaultProvider',
            'a2lix_translation_form.default.listener.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsListener',
            'a2lix_translation_form.default.listener.translationsForms.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsFormsListener',
            'a2lix_translation_form.default.type.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType',
            'a2lix_translation_form.default.type.translationsFields.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType',
            'a2lix_translation_form.default.type.translationsForms.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType',
            'a2lix_translation_form.default.type.translationsLocalesSelector.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType',
            'a2lix_translation_form.default.type.translatedEntity.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType',
            'a2lix_translation_form.locale_provider' => 'default',
            'a2lix_translation_form.default_locale' => 'fr',
            'a2lix_translation_form.templating' => 'CocoricoCoreBundle:Form:fields_translations.html.twig',
            'oneup_uploader.chunks.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\ChunkManager',
            'oneup_uploader.chunks_storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\GaufretteStorage',
            'oneup_uploader.chunks_storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FlysystemStorage',
            'oneup_uploader.chunks_storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FilesystemStorage',
            'oneup_uploader.namer.urlsafename.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UrlSafeNamer',
            'oneup_uploader.namer.uniqid.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UniqidNamer',
            'oneup_uploader.routing.loader.class' => 'Oneup\\UploaderBundle\\Routing\\RouteLoader',
            'oneup_uploader.storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\GaufretteStorage',
            'oneup_uploader.storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FlysystemStorage',
            'oneup_uploader.storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemStorage',
            'oneup_uploader.orphanage.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemOrphanageStorage',
            'oneup_uploader.orphanage.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Orphanage\\OrphanageManager',
            'oneup_uploader.controller.fineuploader.class' => 'Oneup\\UploaderBundle\\Controller\\FineUploaderController',
            'oneup_uploader.controller.blueimp.class' => 'Oneup\\UploaderBundle\\Controller\\BlueimpController',
            'oneup_uploader.controller.uploadify.class' => 'Oneup\\UploaderBundle\\Controller\\UploadifyController',
            'oneup_uploader.controller.yui3.class' => 'Oneup\\UploaderBundle\\Controller\\YUI3Controller',
            'oneup_uploader.controller.fancyupload.class' => 'Oneup\\UploaderBundle\\Controller\\FancyUploadController',
            'oneup_uploader.controller.mooupload.class' => 'Oneup\\UploaderBundle\\Controller\\MooUploadController',
            'oneup_uploader.controller.plupload.class' => 'Oneup\\UploaderBundle\\Controller\\PluploadController',
            'oneup_uploader.controller.dropzone.class' => 'Oneup\\UploaderBundle\\Controller\\DropzoneController',
            'oneup_uploader.error_handler.noop.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\NoopErrorHandler',
            'oneup_uploader.error_handler.blueimp.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\BlueimpErrorHandler',
            'oneup_uploader.error_handler.plupload.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\PluploadErrorHandler',
            'oneup_uploader.error_handler.dropzone.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\DropzoneErrorHandler',
            'oneup_uploader.config.listing_images' => array(
                'max_size' => 10000000,
                'frontend' => 'blueimp',
                'allowed_mimetypes' => array(
                    0 => 'image/gif',
                    1 => 'image/jpg',
                    2 => 'image/jpeg',
                    3 => 'image/png',
                ),
                'enable_progress' => true,
                'namer' => 'cocorico.namer.image_namer',
                'storage' => array(
                    'directory' => '/cocorico/app/../web/uploads/listings/images/',
                    'service' => NULL,
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'endpoints' => array(
                    'upload' => NULL,
                    'progress' => NULL,
                    'cancel' => NULL,
                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_cancelation' => false,
                'root_folder' => false,
            ),
            'oneup_uploader.config.user_images' => array(
                'max_size' => 8000000,
                'frontend' => 'blueimp',
                'allowed_mimetypes' => array(
                    0 => 'image/gif',
                    1 => 'image/jpeg',
                    2 => 'image/png',
                ),
                'enable_progress' => true,
                'namer' => 'cocorico.namer.image_namer',
                'storage' => array(
                    'directory' => '/cocorico/app/../web/uploads/users/images/',
                    'service' => NULL,
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'endpoints' => array(
                    'upload' => NULL,
                    'progress' => NULL,
                    'cancel' => NULL,
                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_cancelation' => false,
                'root_folder' => false,
            ),
            'oneup_uploader.controllers' => array(
                'listing_images' => array(
                    0 => 'oneup_uploader.controller.listing_images',
                    1 => array(
                        'enable_progress' => true,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                        'endpoints' => array(
                            'upload' => NULL,
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                    ),
                ),
                'user_images' => array(
                    0 => 'oneup_uploader.controller.user_images',
                    1 => array(
                        'enable_progress' => true,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                        'endpoints' => array(
                            'upload' => NULL,
                            'progress' => NULL,
                            'cancel' => NULL,
                        ),
                    ),
                ),
            ),
            'oneup_uploader.maxsize' => array(
                'listing_images' => '10000000',
                'user_images' => '8000000',
            ),
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.cache.signer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Signer',
            'liip_imagine.binary.mime_type_guesser.class' => 'Liip\\ImagineBundle\\Binary\\SimpleMimeTypeGuesser',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.downscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.filter.loader.rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RotateFilterLoader',
            'liip_imagine.filter.loader.interlace.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader',
            'liip_imagine.binary.loader.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FileSystemLoader',
            'liip_imagine.binary.loader.stream.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\StreamLoader',
            'liip_imagine.binary.loader.flysystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FlysystemLoader',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache_web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheWebPathResolver',
            'liip_imagine.cache.resolver.aws_s3.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\AwsS3Resolver',
            'liip_imagine.cache.resolver.cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\CacheResolver',
            'liip_imagine.cache.resolver.proxy.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\ProxyResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.meta_data.reader.class' => 'Imagine\\Image\\Metadata\\ExifMetadataReader',
            'liip_imagine.filter.post_processor.jpegoptim.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor',
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.filter.post_processor.optipng.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\OptiPngPostProcessor',
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.cache.resolver.default' => NULL,
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => array(
                'listing_xsmall' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 90,
                                1 => 67,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_small' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 100,
                                1 => 75,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_xxmedium' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 150,
                                1 => 112,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_xmedium' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 200,
                                1 => 150,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_medium' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 275,
                                1 => 206,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_xxlarge' => array(
                    'quality' => 80,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 680,
                                1 => 510,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_xlarge' => array(
                    'quality' => 85,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'upscale' => array(
                            'min' => array(
                                0 => 527,
                                1 => 395,
                            ),
                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 527,
                                1 => 395,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                            'allow_upscale' => true,
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_large' => array(
                    'quality' => 90,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'upscale' => array(
                            'min' => array(
                                0 => 384,
                                1 => 288,
                            ),
                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 384,
                                1 => 288,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                            'allow_upscale' => true,
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_xsmall' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 60,
                                1 => 45,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_small' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 150,
                                1 => 112,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_medium' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 200,
                                1 => 150,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_contact' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 213,
                                1 => 160,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_profile' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 308,
                                1 => 231,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
            ),
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'liip_imagine.controller:filterRuntimeAction',
            'lexik_currency.currency_extension.class' => 'Lexik\\Bundle\\CurrencyBundle\\Twig\\Extension\\CurrencyExtension',
            'lexik_currency.converter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Currency\\Converter',
            'lexik_currency.formatter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Currency\\Formatter',
            'lexik_currency.subscriber.locale.class' => 'Lexik\\Bundle\\CurrencyBundle\\EventListener\\LocaleListener',
            'lexik_currency.adapter_collector.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\AdapterCollector',
            'lexik_currency.adapter_factory.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\AdapterFactory',
            'lexik_currency.abstract_adapter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\AbstractCurrencyAdapter',
            'lexik_currency.ecb_adapter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\EcbCurrencyAdapter',
            'lexik_currency.oer_adapter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\OerCurrencyAdapter',
            'lexik_currency.yahoo_adapter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\YahooCurrencyAdapter',
            'lexik_currency.doctrine.orm.entity_manager' => 'default',
            'lexik_currency.currencies.default' => 'EUR',
            'lexik_currency.currency_class' => 'Lexik\\Bundle\\CurrencyBundle\\Entity\\Currency',
            'lexik_currency.default_adapter' => 'doctrine_currency_adapter',
            'lexik_currency.ecb_url' => 'http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml',
            'lexik_currency.oer_url' => 'http://openexchangerates.org/api/latest.json',
            'lexik_currency.oer_app_id' => NULL,
            'lexik_currency.yahoo_url' => 'https://query.yahooapis.com/v1/public/yql',
            'lexik_currency.decimal_part.precision' => 0,
            'lexik_currency.decimal_part.round_mode' => 'up',
            'lexik_currency.currencies.managed' => array(
                0 => 'EUR',
                1 => 'USD',
                2 => 'GBP',
                3 => 'CHF',
                4 => 'CAD',
                5 => 'JPY',
                6 => 'RUB',
                7 => 'AUD',
            ),
            'fos_message.message_meta_class' => 'Cocorico\\MessageBundle\\Entity\\MessageMetadata',
            'fos_message.thread_meta_class' => 'Cocorico\\MessageBundle\\Entity\\ThreadMetadata',
            'fos_message.message_class' => 'Cocorico\\MessageBundle\\Entity\\Message',
            'fos_message.thread_class' => 'Cocorico\\MessageBundle\\Entity\\Thread',
            'fos_message.new_thread_form.model' => 'Cocorico\\MessageBundle\\FormModel\\NewThreadMessage',
            'fos_message.new_thread_form.name' => 'message',
            'fos_message.reply_form.model' => 'FOS\\MessageBundle\\FormModel\\ReplyMessage',
            'fos_message.reply_form.name' => 'message',
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'white_october_breadcrumbs.options' => array(
                'separator' => '',
                'separatorClass' => 'separator',
                'listId' => 'breadcrumbs',
                'listClass' => 'breadcrumb',
                'itemClass' => '',
                'linkRel' => '',
                'translation_domain' => 'cocorico_breadcrumbs',
                'viewTemplate' => 'WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig',
                'locale' => NULL,
            ),
            'hwi_oauth.authentication.listener.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\Firewall\\OAuthListener',
            'hwi_oauth.authentication.provider.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\Authentication\\Provider\\OAuthProvider',
            'hwi_oauth.authentication.entry_point.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\EntryPoint\\OAuthEntryPoint',
            'hwi_oauth.user.provider.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\OAuthUserProvider',
            'hwi_oauth.user.provider.entity.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\EntityUserProvider',
            'hwi_oauth.user.provider.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\FOSUBUserProvider',
            'hwi_oauth.registration.form.handler.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Form\\FOSUBRegistrationFormHandler',
            'hwi_oauth.resource_owner.oauth1.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth1ResourceOwner',
            'hwi_oauth.resource_owner.oauth2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner',
            'hwi_oauth.resource_owner.amazon.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AmazonResourceOwner',
            'hwi_oauth.resource_owner.asana.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AsanaResourceOwner',
            'hwi_oauth.resource_owner.auth0.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Auth0ResourceOwner',
            'hwi_oauth.resource_owner.azure.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AzureResourceOwner',
            'hwi_oauth.resource_owner.bitbucket.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitbucketResourceOwner',
            'hwi_oauth.resource_owner.bitbucket2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Bitbucket2ResourceOwner',
            'hwi_oauth.resource_owner.bitly.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitlyResourceOwner',
            'hwi_oauth.resource_owner.box.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BoxResourceOwner',
            'hwi_oauth.resource_owner.bufferapp.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BufferAppResourceOwner',
            'hwi_oauth.resource_owner.clever.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\CleverResourceOwner',
            'hwi_oauth.resource_owner.dailymotion.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DailymotionResourceOwner',
            'hwi_oauth.resource_owner.deviantart.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeviantartResourceOwner',
            'hwi_oauth.resource_owner.deezer.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeezerResourceOwner',
            'hwi_oauth.resource_owner.discogs.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DiscogsResourceOwner',
            'hwi_oauth.resource_owner.disqus.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DisqusResourceOwner',
            'hwi_oauth.resource_owner.dropbox.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DropboxResourceOwner',
            'hwi_oauth.resource_owner.eve_online.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EveOnlineResourceOwner',
            'hwi_oauth.resource_owner.eventbrite.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EventbriteResourceOwner',
            'hwi_oauth.resource_owner.facebook.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FacebookResourceOwner',
            'hwi_oauth.resource_owner.fiware.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FiwareResourceOwner',
            'hwi_oauth.resource_owner.flickr.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FlickrResourceOwner',
            'hwi_oauth.resource_owner.foursquare.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FoursquareResourceOwner',
            'hwi_oauth.resource_owner.github.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitHubResourceOwner',
            'hwi_oauth.resource_owner.google.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GoogleResourceOwner',
            'hwi_oauth.resource_owner.youtube.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YoutubeResourceOwner',
            'hwi_oauth.resource_owner.hubic.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\HubicResourceOwner',
            'hwi_oauth.resource_owner.instagram.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\InstagramResourceOwner',
            'hwi_oauth.resource_owner.jawbone.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JawboneResourceOwner',
            'hwi_oauth.resource_owner.jira.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JiraResourceOwner',
            'hwi_oauth.resource_owner.linkedin.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\LinkedinResourceOwner',
            'hwi_oauth.resource_owner.mailru.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\MailRuResourceOwner',
            'hwi_oauth.resource_owner.office365.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Office365ResourceOwner',
            'hwi_oauth.resource_owner.paypal.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\PaypalResourceOwner',
            'hwi_oauth.resource_owner.qq.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\QQResourceOwner',
            'hwi_oauth.resource_owner.reddit.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RedditResourceOwner',
            'hwi_oauth.resource_owner.runkeeper.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RunKeeperResourceOwner',
            'hwi_oauth.resource_owner.salesforce.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SalesforceResourceOwner',
            'hwi_oauth.resource_owner.sensio_connect.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SensioConnectResourceOwner',
            'hwi_oauth.resource_owner.sina_weibo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SinaWeiboResourceOwner',
            'hwi_oauth.resource_owner.slack.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SlackResourceOwner',
            'hwi_oauth.resource_owner.spotify.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SpotifyResourceOwner',
            'hwi_oauth.resource_owner.soundcloud.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SoundcloudResourceOwner',
            'hwi_oauth.resource_owner.stack_exchange.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StackExchangeResourceOwner',
            'hwi_oauth.resource_owner.stereomood.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StereomoodResourceOwner',
            'hwi_oauth.resource_owner.strava.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StravaResourceOwner',
            'hwi_oauth.resource_owner.toshl.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ToshlResourceOwner',
            'hwi_oauth.resource_owner.trakt.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TraktResourceOwner',
            'hwi_oauth.resource_owner.trello.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TrelloResourceOwner',
            'hwi_oauth.resource_owner.twitch.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitchResourceOwner',
            'hwi_oauth.resource_owner.twitter.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitterResourceOwner',
            'hwi_oauth.resource_owner.vkontakte.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\VkontakteResourceOwner',
            'hwi_oauth.resource_owner.wechat.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WechatResourceOwner',
            'hwi_oauth.resource_owner.windows_live.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WindowsLiveResourceOwner',
            'hwi_oauth.resource_owner.wordpress.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WordpressResourceOwner',
            'hwi_oauth.resource_owner.wunderlist.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WunderlistResourceOwner',
            'hwi_oauth.resource_owner.xing.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\XingResourceOwner',
            'hwi_oauth.resource_owner.yahoo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YahooResourceOwner',
            'hwi_oauth.resource_owner.yandex.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YandexResourceOwner',
            'hwi_oauth.resource_owner.odnoklassniki.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\OdnoklassnikiResourceOwner',
            'hwi_oauth.resource_owner.37signals.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ThirtySevenSignalsResourceOwner',
            'hwi_oauth.resource_owner.itembase.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ItembaseResourceOwner',
            'hwi_oauth.resource_ownermap.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\ResourceOwnerMap',
            'hwi_oauth.security.oauth_utils.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\OAuthUtils',
            'hwi_oauth.storage.session.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\RequestDataStorage\\SessionStorage',
            'hwi_oauth.templating.helper.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Templating\\Helper\\OAuthHelper',
            'hwi_oauth.twig.extension.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Twig\\Extension\\OAuthExtension',
            'hwi_oauth.http_client.class' => 'Buzz\\Client\\Curl',
            'hwi_oauth.firewall_names' => array(
                0 => 'main',
            ),
            'hwi_oauth.target_path_parameter' => NULL,
            'hwi_oauth.use_referer' => false,
            'hwi_oauth.failed_auth_path' => 'hwi_oauth_connect',
            'hwi_oauth.resource_owners' => array(
                'facebook' => 'facebook',
            ),
            'hwi_oauth.connect' => true,
            'hwi_oauth.fosub_enabled' => false,
            'hwi_oauth.connect.confirmation' => true,
            'hwi_oauth.templating.engine' => 'twig',
            'fm_elfinder.loader' => 'FM\\ElfinderBundle\\Loader\\ElFinderLoader',
            'fm_elfinder.configurator' => 'FM\\ElfinderBundle\\Configuration\\ElFinderConfigurationReader',
            'elfinder.form.type.class' => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType',
            'fm_elfinder' => array(
                'instances' => array(
                    'ckeditor' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'theme' => 'smoothness',
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => false,
                            'roots' => array(
                                'uploads' => array(
                                    'show_hidden' => false,
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'application/pdf',
                                        4 => 'image/gif',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '12M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'fileMode' => 420,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(

                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'disabled_commands' => array(

                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '/',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(

                                    ),
                                    'archivers' => array(
                                        'enabled' => false,
                                        'create' => array(

                                        ),
                                        'extract' => array(

                                        ),
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                        'adapter_service' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(

                                    ),
                                    'driver_options' => array(

                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(

                            ),
                            'plugins' => array(

                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                        'visible_mime_types' => array(

                        ),
                    ),
                ),
                'configuration_provider' => 'fm_elfinder.configurator.default',
                'assets_path' => '/assets',
                'loader' => 'fm_elfinder.loader.default',
            ),
            'simplethings.entityaudit.audited_entities' => array(
                0 => 'CocoricoConfigBundle\\Entity\\Parameter',
                1 => 'Cocorico\\ConfigBundle\\Entity\\Parameter',
            ),
            'simplethings.entityaudit.global_ignore_columns' => array(

            ),
            'simplethings.entityaudit.table_prefix' => '',
            'simplethings.entityaudit.table_suffix' => '_audit',
            'simplethings.entityaudit.revision_field_name' => 'rev',
            'simplethings.entityaudit.revision_type_field_name' => 'revtype',
            'simplethings.entityaudit.revision_table_name' => 'revisions',
            'simplethings.entityaudit.revision_id_field_type' => 'integer',
            'cocorico_user.account_created_user.email.template' => 'CocoricoUserBundle:Mails/User:account_created_user.txt.twig',
            'cocorico_user.forgot_password_user.email.template' => 'CocoricoUserBundle:Mails/User:forgot_password_user.txt.twig',
            'cocorico_user.account_creation_confirmation_user.email.template' => 'CocoricoUserBundle:Mails/User:account_creation_confirmation_user.txt.twig',
            'cocorico_user.profile_about_me.form.class' => 'Cocorico\\UserBundle\\Form\\Type\\ProfileAboutMeFormType',
            'cocorico_message.new_thread_message_user.email.template' => 'CocoricoMessageBundle:Mails:new_thread_message_user.txt.twig',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'deploy.config' => array(
                'prod' => array(
                    'rsync_options' => '-azC --force --delete --progress -h --checksum',
                    'host' => '185.62.185.32',
                    'dir' => '/var/www/demo.costocking.com',
                    'user' => 'debian',
                    'port' => 22,
                    'timeout' => 120,
                ),
            ),
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.validator' => array(
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'doctrine_mongodb.odm.data_collector.pretty' => array(
                    0 => 'mongodb',
                    1 => '@DoctrineMongoDB/Collector/mongodb.html.twig',
                ),
                'sonata.block.data_collector' => array(
                    0 => 'block',
                    1 => 'SonataBlockBundle:Profiler:block.html.twig',
                ),
                'Bazinga\\GeocoderBundle\\DataCollector\\GeocoderDataCollector' => array(
                    0 => 'geocoder',
                    1 => '@BazingaGeocoder/Collector/geocoder.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.symfony_bundle_swiftmailerbundle_command_debugcommand' => 'swiftmailer.command.debug',
                'console.command.symfony_bundle_swiftmailerbundle_command_newemailcommand' => 'swiftmailer.command.new_email',
                'console.command.symfony_bundle_swiftmailerbundle_command_sendemailcommand' => 'swiftmailer.command.send_email',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand',
                'console.command.doctrine_bundle_mongodbbundle_command_clearmetadatacachedoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_clearmetadatacachedoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_createschemadoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_createschemadoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_dropschemadoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_dropschemadoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_generatedocumentsdoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_generatedocumentsdoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_generatehydratorsdoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_generatehydratorsdoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_generateproxiesdoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_generateproxiesdoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_infodoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_infodoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_loaddatafixturesdoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_loaddatafixturesdoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_querydoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_querydoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_sharddoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_sharddoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_tailcursordoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_tailcursordoctrineodmcommand',
                'console.command.doctrine_bundle_mongodbbundle_command_updateschemadoctrineodmcommand' => 'console.command.doctrine_bundle_mongodbbundle_command_updateschemadoctrineodmcommand',
                'console.command.sonata_adminbundle_command_createclasscachecommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
                'console.command.sonata_adminbundle_command_explainadmincommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
                'console.command.sonata_adminbundle_command_generateadmincommand' => 'Sonata\\AdminBundle\\Command\\GenerateAdminCommand',
                'console.command.sonata_adminbundle_command_generateobjectaclcommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
                'console.command.sonata_adminbundle_command_listadmincommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
                'console.command.sonata_adminbundle_command_setupaclcommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
                'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' => 'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand',
                'console.command.sonata_corebundle_command_sonatalistformmappingcommand' => 'console.command.sonata_corebundle_command_sonatalistformmappingcommand',
                'console.command.sonata_blockbundle_command_debugblockscommand' => 'console.command.sonata_blockbundle_command_debugblockscommand',
                'console.command.ivory_ckeditorbundle_command_ckeditorinstallercommand' => 'console.command.ivory_ckeditorbundle_command_ckeditorinstallercommand',
                'console.command.doctrine_bundle_fixturesbundle_command_loaddatafixturesdoctrinecommand' => 'doctrine.fixtures_load_command',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'console.command.sensiolabs_security_command_securitycheckercommand',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'swiftmailer.command.debug' => true,
                'swiftmailer.command.new_email' => true,
                'swiftmailer.command.send_email' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'doctrine.fixtures_load_command' => true,
            ),
            'sonata.core.form.types' => array(
                0 => 'cocorico.form.type.listing_new',
                1 => 'cocorico.form.type.listing_edit',
                2 => 'cocorico.form.type.listing_edit_status',
                3 => 'cocorico.form.type.listing_edit_description',
                4 => 'cocorico.form.type.listing_edit_price',
                5 => 'cocorico.form.type.listing_edit_images',
                6 => 'cocorico.form.type.listing_edit_location',
                7 => 'cocorico.form.type.listing_edit_characteristic',
                8 => 'cocorico.form.type.listing_edit_availabilities',
                9 => 'cocorico.form.type.listing_edit_availabilities_status',
                10 => 'cocorico.form.type.listing_edit_availability_status',
                11 => 'cocorico.form.type.listing_edit_availabilities_prices',
                12 => 'cocorico.form.type.listing_edit_availability_price',
                13 => 'cocorico.form.type.listing_new_categories',
                14 => 'cocorico.form.type.listing_edit_categories',
                15 => 'cocorico.form.type.listing_edit_categories_ajax',
                16 => 'cocorico.form.type.country_filtered',
                17 => 'cocorico.form.type.language_filtered',
                18 => 'cocorico.form.type.price',
                19 => 'cocorico.form.type.price_range',
                20 => 'cocorico.form.type.entity_hidden',
                21 => 'cocorico.form.type.listing_category',
                22 => 'cocorico.form.type.listing_search_result',
                23 => 'cocorico.form.type.listing_search',
                24 => 'cocorico.form.type.listing_search_home',
                25 => 'cocorico.form.type.listing_characteristic',
                26 => 'cocorico.form.type.listing_listing_characteristic',
                27 => 'cocorico.form.type.listing_edit_duration',
                28 => 'cocorico.form.type.booking_new',
                29 => 'cocorico.form.type.booking_edit',
                30 => 'cocorico.form.type.booking_price',
                31 => 'cocorico.form.type.booking_user_address',
                32 => 'cocorico.form.booking.status_filter',
                33 => 'cocorico_user.form.type.login',
                34 => 'cocorico_user.form.type.register',
                35 => 'cocorico_user.form.type.user_address',
                36 => 'form.type.form',
                37 => 'form.type.choice',
                38 => 'form.type.entity',
                39 => 'fos_user.username_form_type',
                40 => 'fos_user.profile.form.type',
                41 => 'fos_user.registration.form.type',
                42 => 'fos_user.change_password.form.type',
                43 => 'fos_user.resetting.form.type',
                44 => 'fos_user.group.form.type',
                45 => 'form.type.mongodb_document',
                46 => 'sonata.admin.form.type.admin',
                47 => 'sonata.admin.form.type.model_choice',
                48 => 'sonata.admin.form.type.model_list',
                49 => 'sonata.admin.form.type.model_reference',
                50 => 'sonata.admin.form.type.model_hidden',
                51 => 'sonata.admin.form.type.model_autocomplete',
                52 => 'sonata.admin.form.type.collection',
                53 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                54 => 'sonata.admin.form.filter.type.number',
                55 => 'sonata.admin.form.filter.type.choice',
                56 => 'sonata.admin.form.filter.type.default',
                57 => 'sonata.admin.form.filter.type.date',
                58 => 'sonata.admin.form.filter.type.daterange',
                59 => 'sonata.admin.form.filter.type.datetime',
                60 => 'sonata.admin.form.filter.type.datetime_range',
                61 => 'sonata.core.form.type.array',
                62 => 'sonata.core.form.type.boolean',
                63 => 'sonata.core.form.type.collection',
                64 => 'sonata.core.form.type.translatable_choice',
                65 => 'sonata.core.form.type.date_range',
                66 => 'sonata.core.form.type.datetime_range',
                67 => 'sonata.core.form.type.date_picker',
                68 => 'sonata.core.form.type.datetime_picker',
                69 => 'sonata.core.form.type.date_range_picker',
                70 => 'sonata.core.form.type.datetime_range_picker',
                71 => 'sonata.core.form.type.equal',
                72 => 'sonata.core.form.type.color_selector',
                73 => 'sonata.core.form.type.color',
                74 => 'sonata.block.form.type.block',
                75 => 'sonata.block.form.type.container_template',
                76 => 'sonata.user.form.type.security_roles',
                77 => 'sonata.user.form.gender_list',
                78 => 'a2lix_translation_form.default.type.translations',
                79 => 'a2lix_translation_form.default.type.translationsFields',
                80 => 'a2lix_translation_form.default.type.translationsForms',
                81 => 'a2lix_translation_form.default.type.translationsLocalesSelector',
                82 => 'a2lix_translation_form.default.type.translatedEntity',
                83 => 'liip_imagine.form.type.image',
                84 => 'fos_message.recipients_selector',
                85 => 'ivory_ck_editor.form.type',
                86 => 'fm_elfinder.form.type',
                87 => 'cocorico_geo.form.type.geocoding',
                88 => 'cocorico_user.profile_about_me.form.type',
                89 => 'cocorico_message.new_thread.form.type',
                90 => 'cocorico_message.reply.form.type',
                91 => 'cocorico_contact.form.type.contact_new',
                92 => 'cocorico.star_rating.form.type',
                93 => 'cocorico.form.type.review_new',
                94 => 'cocorico_time.form.type.date_range',
                95 => 'cocorico_time.form.type.date_hidden',
                96 => 'cocorico_time.form.type.time_range',
                97 => 'cocorico_time.form.type.weekdays',
            ),
            'sonata.core.form.type_extensions' => array(
                0 => 'cocorico.image_type_extension',
                1 => 'form.type_extension.form.http_foundation',
                2 => 'form.type_extension.form.validator',
                3 => 'form.type_extension.repeated.validator',
                4 => 'form.type_extension.submit.validator',
                5 => 'form.type_extension.upload.validator',
                6 => 'form.type_extension.csrf',
                7 => 'form.type_extension.form.data_collector',
                8 => 'sonata.admin.form.extension.field',
                9 => 'sonata.admin.form.extension.field.mopa',
                10 => 'sonata.admin.form.extension.choice',
            ),
        );
    }
}
