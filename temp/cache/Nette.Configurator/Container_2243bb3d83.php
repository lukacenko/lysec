<?php
// source: C:\xampp\htdocs\lysec\app/config/config.neon 
// source: C:\xampp\htdocs\lysec\app/config/config.local.neon 

class Container_2243bb3d83 extends Nette\DI\Container
{
	protected $meta = array(
		'types' => array(
			'Nette\Object' => array(
				array(
					'application.application',
					'application.linkGenerator',
					'database.default.connection',
					'database.default.structure',
					'database.default.context',
					'http.requestFactory',
					'http.request',
					'http.response',
					'http.context',
					'security.user',
					'session.session',
					'translation.catalogueCompiler',
					'translation.panel',
					'translation.userLocaleResolver.param',
					'translation.userLocaleResolver.acceptHeader',
					'translation.userLocaleResolver.session',
					'translation.helpers',
					'translation.fallbackResolver',
					'translation.catalogueFactory',
					'translation.extractor.latte',
					'translation.loader',
					'61_Model_Repository_Homepage',
					'62_Model_Repository_UserManager',
					'authorizator',
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'container',
				),
			),
			'Nette\Application\Application' => array(1 => array('application.application')),
			'Nette\Application\IPresenterFactory' => array(
				1 => array('application.presenterFactory'),
			),
			'Nette\Application\LinkGenerator' => array(1 => array('application.linkGenerator')),
			'Nette\Caching\Storages\IJournal' => array(1 => array('cache.journal')),
			'Nette\Caching\IStorage' => array(1 => array('cache.storage')),
			'Nette\Database\Connection' => array(
				1 => array('database.default.connection'),
			),
			'Nette\Database\IStructure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\Structure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\IConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Conventions\DiscoveredConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Context' => array(1 => array('database.default.context')),
			'Nette\Http\RequestFactory' => array(1 => array('http.requestFactory')),
			'Nette\Http\IRequest' => array(1 => array('http.request')),
			'Nette\Http\Request' => array(1 => array('http.request')),
			'Nette\Http\IResponse' => array(1 => array('http.response')),
			'Nette\Http\Response' => array(1 => array('http.response')),
			'Nette\Http\Context' => array(1 => array('http.context')),
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => array(1 => array('latte.latteFactory')),
			'Nette\Application\UI\ITemplateFactory' => array(1 => array('latte.templateFactory')),
			'Latte\Object' => array(array('nette.latte')),
			'Latte\Engine' => array(array('nette.latte')),
			'Nette\Mail\IMailer' => array(1 => array('mail.mailer')),
			'Nette\Application\IRouter' => array(1 => array('routing.router')),
			'Nette\Security\IUserStorage' => array(1 => array('security.userStorage')),
			'Nette\Security\User' => array(1 => array('security.user')),
			'Nette\Http\Session' => array(1 => array('session.session')),
			'Tracy\ILogger' => array(1 => array('tracy.logger')),
			'Tracy\BlueScreen' => array(1 => array('tracy.blueScreen')),
			'Tracy\Bar' => array(1 => array('tracy.bar')),
			'Symfony\Component\Translation\Translator' => array(1 => array('translation.default')),
			'Symfony\Component\Translation\TranslatorBagInterface' => array(1 => array('translation.default')),
			'Symfony\Component\Translation\TranslatorInterface' => array(1 => array('translation.default')),
			'Kdyby\Translation\ITranslator' => array(1 => array('translation.default')),
			'Nette\Localization\ITranslator' => array(1 => array('translation.default')),
			'Kdyby\Translation\Translator' => array(1 => array('translation.default')),
			'Kdyby\Translation\CatalogueCompiler' => array(
				1 => array('translation.catalogueCompiler'),
			),
			'Tracy\IBarPanel' => array(1 => array('translation.panel')),
			'Kdyby\Translation\Diagnostics\Panel' => array(1 => array('translation.panel')),
			'Kdyby\Translation\IUserLocaleResolver' => array(
				array('translation.userLocaleResolver.param'),
				array(
					'translation.userLocaleResolver.acceptHeader',
					'translation.userLocaleResolver.session',
					'translation.userLocaleResolver',
				),
			),
			'Kdyby\Translation\LocaleResolver\LocaleParamResolver' => array(
				array('translation.userLocaleResolver.param'),
			),
			'Kdyby\Translation\LocaleResolver\AcceptHeaderResolver' => array(
				1 => array(
					'translation.userLocaleResolver.acceptHeader',
				),
			),
			'Kdyby\Translation\LocaleResolver\SessionResolver' => array(
				1 => array(
					'translation.userLocaleResolver.session',
				),
			),
			'Kdyby\Translation\TemplateHelpers' => array(1 => array('translation.helpers')),
			'Kdyby\Translation\FallbackResolver' => array(
				1 => array('translation.fallbackResolver'),
			),
			'Kdyby\Translation\CatalogueFactory' => array(
				1 => array('translation.catalogueFactory'),
			),
			'Symfony\Component\Translation\MessageSelector' => array(1 => array('translation.selector')),
			'Symfony\Component\Translation\Extractor\ExtractorInterface' => array(
				1 => array('translation.extractor'),
				0 => array('translation.extractor.latte'),
			),
			'Symfony\Component\Translation\Extractor\ChainExtractor' => array(1 => array('translation.extractor')),
			'Kdyby\Translation\Extractors\LatteExtractor' => array(array('translation.extractor.latte')),
			'Symfony\Component\Translation\Writer\TranslationWriter' => array(1 => array('translation.writer')),
			'Symfony\Component\Translation\Dumper\FileDumper' => array(
				array(
					'translation.dumper.php',
					'translation.dumper.xliff',
					'translation.dumper.po',
					'translation.dumper.mo',
					'translation.dumper.yml',
					'translation.dumper.neon',
					'translation.dumper.qt',
					'translation.dumper.csv',
					'translation.dumper.ini',
					'translation.dumper.res',
				),
			),
			'Symfony\Component\Translation\Dumper\DumperInterface' => array(
				array(
					'translation.dumper.php',
					'translation.dumper.xliff',
					'translation.dumper.po',
					'translation.dumper.mo',
					'translation.dumper.yml',
					'translation.dumper.neon',
					'translation.dumper.qt',
					'translation.dumper.csv',
					'translation.dumper.ini',
					'translation.dumper.res',
				),
			),
			'Symfony\Component\Translation\Dumper\PhpFileDumper' => array(array('translation.dumper.php')),
			'Symfony\Component\Translation\Dumper\XliffFileDumper' => array(array('translation.dumper.xliff')),
			'Symfony\Component\Translation\Dumper\PoFileDumper' => array(array('translation.dumper.po')),
			'Symfony\Component\Translation\Dumper\MoFileDumper' => array(array('translation.dumper.mo')),
			'Symfony\Component\Translation\Dumper\YamlFileDumper' => array(array('translation.dumper.yml')),
			'Kdyby\Translation\Dumper\NeonFileDumper' => array(array('translation.dumper.neon')),
			'Symfony\Component\Translation\Dumper\QtFileDumper' => array(array('translation.dumper.qt')),
			'Symfony\Component\Translation\Dumper\CsvFileDumper' => array(array('translation.dumper.csv')),
			'Symfony\Component\Translation\Dumper\IniFileDumper' => array(array('translation.dumper.ini')),
			'Symfony\Component\Translation\Dumper\IcuResFileDumper' => array(array('translation.dumper.res')),
			'Kdyby\Translation\IResourceLoader' => array(1 => array('translation.loader')),
			'Kdyby\Translation\TranslationLoader' => array(1 => array('translation.loader')),
			'Symfony\Component\Translation\Loader\FileLoader' => array(
				array(
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.csv',
					'translation.loader.ini',
				),
			),
			'Symfony\Component\Translation\Loader\ArrayLoader' => array(
				array(
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.csv',
					'translation.loader.ini',
					'translation.loader.neon',
				),
			),
			'Symfony\Component\Translation\Loader\LoaderInterface' => array(
				array(
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.xlf',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.ts',
					'translation.loader.csv',
					'translation.loader.res',
					'translation.loader.dat',
					'translation.loader.ini',
					'translation.loader.neon',
				),
			),
			'Symfony\Component\Translation\Loader\PhpFileLoader' => array(array('translation.loader.php')),
			'Symfony\Component\Translation\Loader\YamlFileLoader' => array(array('translation.loader.yml')),
			'Symfony\Component\Translation\Loader\XliffFileLoader' => array(array('translation.loader.xlf')),
			'Symfony\Component\Translation\Loader\PoFileLoader' => array(array('translation.loader.po')),
			'Symfony\Component\Translation\Loader\MoFileLoader' => array(array('translation.loader.mo')),
			'Symfony\Component\Translation\Loader\QtFileLoader' => array(array('translation.loader.ts')),
			'Symfony\Component\Translation\Loader\CsvFileLoader' => array(array('translation.loader.csv')),
			'Symfony\Component\Translation\Loader\IcuResFileLoader' => array(
				array(
					'translation.loader.res',
					'translation.loader.dat',
				),
			),
			'Symfony\Component\Translation\Loader\IcuDatFileLoader' => array(array('translation.loader.dat')),
			'Symfony\Component\Translation\Loader\IniFileLoader' => array(array('translation.loader.ini')),
			'Kdyby\Translation\Loader\NeonFileLoader' => array(array('translation.loader.neon')),
			'Model\Repository\Repository' => array(
				1 => array('61_Model_Repository_Homepage'),
			),
			'Model\Repository\Homepage' => array(
				1 => array('61_Model_Repository_Homepage'),
			),
			'Nette\Security\IAuthenticator' => array(
				1 => array('62_Model_Repository_UserManager'),
			),
			'Model\Repository\UserManager' => array(
				1 => array('62_Model_Repository_UserManager'),
			),
			'Nette\Security\IAuthorizator' => array(1 => array('authorizator')),
			'Nette\Security\Permission' => array(1 => array('authorizator')),
			'Nette\Application\UI\Presenter' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\Control' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\PresenterComponent' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\ComponentModel\Container' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\ComponentModel\Component' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\IPresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				),
			),
			'ArrayAccess' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\IStatePersistent' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\ISignalReceiver' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\ComponentModel\IComponent' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\ComponentModel\IContainer' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'Nette\Application\UI\IRenderable' => array(
				array(
					'application.1',
					'application.3',
					'application.4',
				),
			),
			'App\Presenters\Error4xxPresenter' => array(array('application.1')),
			'App\Presenters\ErrorPresenter' => array(array('application.2')),
			'BasePresenter' => array(array('application.3', 'application.4')),
			'App\Presenters\HomepagePresenter' => array(array('application.3')),
			'App\Presenters\SignPresenter' => array(array('application.4')),
			'NetteModule\ErrorPresenter' => array(array('application.5')),
			'NetteModule\MicroPresenter' => array(array('application.6')),
			'Nette\DI\Container' => array(1 => array('container')),
		),
		'services' => array(
			'61_Model_Repository_Homepage' => 'Model\Repository\Homepage',
			'62_Model_Repository_UserManager' => 'Model\Repository\UserManager',
			'application.1' => 'App\Presenters\Error4xxPresenter',
			'application.2' => 'App\Presenters\ErrorPresenter',
			'application.3' => 'App\Presenters\HomepagePresenter',
			'application.4' => 'App\Presenters\SignPresenter',
			'application.5' => 'NetteModule\ErrorPresenter',
			'application.6' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'authorizator' => 'Nette\Security\Permission',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'nette.latte' => 'Latte\Engine',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
			'translation.catalogueCompiler' => 'Kdyby\Translation\CatalogueCompiler',
			'translation.catalogueFactory' => 'Kdyby\Translation\CatalogueFactory',
			'translation.default' => 'Kdyby\Translation\Translator',
			'translation.dumper.csv' => 'Symfony\Component\Translation\Dumper\CsvFileDumper',
			'translation.dumper.ini' => 'Symfony\Component\Translation\Dumper\IniFileDumper',
			'translation.dumper.mo' => 'Symfony\Component\Translation\Dumper\MoFileDumper',
			'translation.dumper.neon' => 'Kdyby\Translation\Dumper\NeonFileDumper',
			'translation.dumper.php' => 'Symfony\Component\Translation\Dumper\PhpFileDumper',
			'translation.dumper.po' => 'Symfony\Component\Translation\Dumper\PoFileDumper',
			'translation.dumper.qt' => 'Symfony\Component\Translation\Dumper\QtFileDumper',
			'translation.dumper.res' => 'Symfony\Component\Translation\Dumper\IcuResFileDumper',
			'translation.dumper.xliff' => 'Symfony\Component\Translation\Dumper\XliffFileDumper',
			'translation.dumper.yml' => 'Symfony\Component\Translation\Dumper\YamlFileDumper',
			'translation.extractor' => 'Symfony\Component\Translation\Extractor\ChainExtractor',
			'translation.extractor.latte' => 'Kdyby\Translation\Extractors\LatteExtractor',
			'translation.fallbackResolver' => 'Kdyby\Translation\FallbackResolver',
			'translation.helpers' => 'Kdyby\Translation\TemplateHelpers',
			'translation.loader' => 'Kdyby\Translation\TranslationLoader',
			'translation.loader.csv' => 'Symfony\Component\Translation\Loader\CsvFileLoader',
			'translation.loader.dat' => 'Symfony\Component\Translation\Loader\IcuDatFileLoader',
			'translation.loader.ini' => 'Symfony\Component\Translation\Loader\IniFileLoader',
			'translation.loader.mo' => 'Symfony\Component\Translation\Loader\MoFileLoader',
			'translation.loader.neon' => 'Kdyby\Translation\Loader\NeonFileLoader',
			'translation.loader.php' => 'Symfony\Component\Translation\Loader\PhpFileLoader',
			'translation.loader.po' => 'Symfony\Component\Translation\Loader\PoFileLoader',
			'translation.loader.res' => 'Symfony\Component\Translation\Loader\IcuResFileLoader',
			'translation.loader.ts' => 'Symfony\Component\Translation\Loader\QtFileLoader',
			'translation.loader.xlf' => 'Symfony\Component\Translation\Loader\XliffFileLoader',
			'translation.loader.yml' => 'Symfony\Component\Translation\Loader\YamlFileLoader',
			'translation.panel' => 'Kdyby\Translation\Diagnostics\Panel',
			'translation.selector' => 'Symfony\Component\Translation\MessageSelector',
			'translation.userLocaleResolver' => 'Kdyby\Translation\IUserLocaleResolver',
			'translation.userLocaleResolver.acceptHeader' => 'Kdyby\Translation\LocaleResolver\AcceptHeaderResolver',
			'translation.userLocaleResolver.param' => 'Kdyby\Translation\LocaleResolver\LocaleParamResolver',
			'translation.userLocaleResolver.session' => 'Kdyby\Translation\LocaleResolver\SessionResolver',
			'translation.writer' => 'Symfony\Component\Translation\Writer\TranslationWriter',
		),
		'tags' => array(
			'inject' => array(
				'application.1' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'translation.catalogueCompiler' => FALSE,
				'translation.catalogueFactory' => FALSE,
				'translation.default' => FALSE,
				'translation.dumper.csv' => FALSE,
				'translation.dumper.ini' => FALSE,
				'translation.dumper.mo' => FALSE,
				'translation.dumper.neon' => FALSE,
				'translation.dumper.php' => FALSE,
				'translation.dumper.po' => FALSE,
				'translation.dumper.qt' => FALSE,
				'translation.dumper.res' => FALSE,
				'translation.dumper.xliff' => FALSE,
				'translation.dumper.yml' => FALSE,
				'translation.extractor' => FALSE,
				'translation.extractor.latte' => FALSE,
				'translation.fallbackResolver' => FALSE,
				'translation.helpers' => FALSE,
				'translation.loader' => FALSE,
				'translation.loader.csv' => FALSE,
				'translation.loader.dat' => FALSE,
				'translation.loader.ini' => FALSE,
				'translation.loader.mo' => FALSE,
				'translation.loader.neon' => FALSE,
				'translation.loader.php' => FALSE,
				'translation.loader.po' => FALSE,
				'translation.loader.res' => FALSE,
				'translation.loader.ts' => FALSE,
				'translation.loader.xlf' => FALSE,
				'translation.loader.yml' => FALSE,
				'translation.selector' => FALSE,
				'translation.userLocaleResolver' => FALSE,
				'translation.userLocaleResolver.acceptHeader' => FALSE,
				'translation.userLocaleResolver.param' => FALSE,
				'translation.userLocaleResolver.session' => FALSE,
				'translation.writer' => FALSE,
			),
			'nette.presenter' => array(
				'application.1' => 'App\Presenters\Error4xxPresenter',
				'application.2' => 'App\Presenters\ErrorPresenter',
				'application.3' => 'App\Presenters\HomepagePresenter',
				'application.4' => 'App\Presenters\SignPresenter',
				'application.5' => 'NetteModule\ErrorPresenter',
				'application.6' => 'NetteModule\MicroPresenter',
			),
			'translation.dumper' => array(
				'translation.dumper.csv' => 'csv',
				'translation.dumper.ini' => 'ini',
				'translation.dumper.mo' => 'mo',
				'translation.dumper.neon' => 'neon',
				'translation.dumper.php' => 'php',
				'translation.dumper.po' => 'po',
				'translation.dumper.qt' => 'qt',
				'translation.dumper.res' => 'res',
				'translation.dumper.xliff' => 'xliff',
				'translation.dumper.yml' => 'yml',
			),
			'translation.extractor' => array(
				'translation.extractor.latte' => 'latte',
			),
			'translation.loader' => array(
				'translation.loader.csv' => 'csv',
				'translation.loader.dat' => 'dat',
				'translation.loader.ini' => 'ini',
				'translation.loader.mo' => 'mo',
				'translation.loader.neon' => 'neon',
				'translation.loader.php' => 'php',
				'translation.loader.po' => 'po',
				'translation.loader.res' => 'res',
				'translation.loader.ts' => 'ts',
				'translation.loader.xlf' => 'xlf',
				'translation.loader.yml' => 'yml',
			),
		),
		'aliases' => array(
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => 'C:\xampp\htdocs\lysec\app',
			'wwwDir' => 'C:\xampp\htdocs\lysec\www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'environment' => 'development',
			'consoleMode' => FALSE,
			'container' => array('class' => NULL, 'parent' => NULL),
			'tempDir' => 'C:\xampp\htdocs\lysec\app/../temp',
			'companyData' => array(
				'firma_nazov' => 'Nov, s.r.o.',
				'firma_adresa' => 'Vretenová 7',
				'firma_psc' => '841 04',
				'firma_mesto' => 'Bratislava',
				'firma_www' => 'http://www.nov.sk/',
			),
			'wunderground' => array(
				'enable' => TRUE,
				'apikey' => '737ed05c464cb2b1',
				'state' => 'S1',
				'location' => 'zmw:00000.5.11856',
				'basePath' => 'C:\xampp\htdocs\lysec\www/gen_img',
				'baseUri' => 'gen_img',
				'refresh' => '60 minutes',
				'language' => 'SK',
			),
		));
	}


	/**
	 * @return Model\Repository\Homepage
	 */
	public function createService__61_Model_Repository_Homepage()
	{
		$service = new Model\Repository\Homepage($this->getService('database.default.context'), $this);
		return $service;
	}


	/**
	 * @return Model\Repository\UserManager
	 */
	public function createService__62_Model_Repository_UserManager()
	{
		$service = new Model\Repository\UserManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\Presenters\HomepagePresenter($this->getService('61_Model_Repository_Homepage'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->translator = $this->getService('translation.default');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\SignPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\Presenters\SignPresenter($this->getService('62_Model_Repository_UserManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->translator = $this->getService('translation.default');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('application.presenterFactory')));
		$service->onRequest[] = array(
			$this->getService('translation.userLocaleResolver.param'),
			'onRequest',
		);
		$self = $this; $service->onStartup[] = function () use ($self) { $self->getService('translation.default'); };
		$service->onRequest[] = array(
			$this->getService('translation.panel'),
			'onRequest',
		);
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'), $this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'C:\xampp\htdocs\lysec\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(array(
			'*' => 'App\*Module\Presenters\*Presenter',
		));
		return $service;
	}


	/**
	 * @return Nette\Security\Permission
	 */
	public function createServiceAuthorizator()
	{
		$service = new Nette\Security\Permission;
		$service->addRole('guest');
		$service->addRole('user', 'guest');
		$service->addRole('superuser', 'user');
		$service->addRole('admin', 'superuser');
		$service->addResource('Sign');
		$service->addResource('Homepage');
		$service->allow('guest', 'Sign');
		$service->allow('user', 'Homepage');
		$service->allow('admin');
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('C:\xampp\htdocs\lysec\app/../temp/cache/journal.s3db');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\lysec\app/../temp/cache', $this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=46.229.230.119;dbname=fk017202db', 'fk017200', 'xhahyqeq', array('lazy' => TRUE));
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, TRUE, 'default');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'), $this->getService('database.default.structure'),
			$this->getService('database.default.conventions'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_2243bb3d83_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('security.user'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		trigger_error('Service nette.latte is deprecated, implement Nette\Bridges\ApplicationLatte\ILatteFactory.',
			16384);
		$service->setTempDirectory('C:\xampp\htdocs\lysec\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->onCompile[] = function($engine) { Kdyby\Translation\Latte\TranslateMacros::install($engine->getCompiler()); };
		$service->addFilter('translate', array(
			$this->getService('translation.helpers'),
			'translate',
		));
		$service->addFilter('getTranslator', array(
			$this->getService('translation.helpers'),
			'getTranslator',
		));
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('62_Model_Repository_UserManager'),
			$this->getService('authorizator'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Translation\CatalogueCompiler
	 */
	public function createServiceTranslation__catalogueCompiler()
	{
		$service = new Kdyby\Translation\CatalogueCompiler(new Kdyby\Translation\Caching\PhpFileStorage('C:\xampp\htdocs\lysec\app/../temp/cache', $this->getService('cache.journal')),
			$this->getService('translation.fallbackResolver'), $this->getService('translation.catalogueFactory'));
		$service->enableDebugMode();
		return $service;
	}


	/**
	 * @return Kdyby\Translation\CatalogueFactory
	 */
	public function createServiceTranslation__catalogueFactory()
	{
		$service = new Kdyby\Translation\CatalogueFactory($this->getService('translation.fallbackResolver'), $this->getService('translation.loader'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Translator
	 */
	public function createServiceTranslation__default()
	{
		$service = new Kdyby\Translation\Translator($this->getService('translation.userLocaleResolver'), $this->getService('translation.selector'),
			$this->getService('translation.catalogueCompiler'), $this->getService('translation.fallbackResolver'),
			$this->getService('translation.loader'));
		$this->getService('translation.userLocaleResolver.param')->setTranslator($service);
		$service->setDefaultLocale('sk');
		$service->setLocaleWhitelist(array('sk', 'en'));
		$service->setFallbackLocales(array('sk_SK'));
		$this->getService('translation.panel')->register($service);
		$service->addResource('po', 'C:\xampp\htdocs\lysec\app/lang\messages.en.po', 'en', 'messages');
		$service->addResource('mo', 'C:\xampp\htdocs\lysec\app/lang\messages.en.mo', 'en', 'messages');
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\CsvFileDumper
	 */
	public function createServiceTranslation__dumper__csv()
	{
		$service = new Symfony\Component\Translation\Dumper\CsvFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\IniFileDumper
	 */
	public function createServiceTranslation__dumper__ini()
	{
		$service = new Symfony\Component\Translation\Dumper\IniFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\MoFileDumper
	 */
	public function createServiceTranslation__dumper__mo()
	{
		$service = new Symfony\Component\Translation\Dumper\MoFileDumper;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Dumper\NeonFileDumper
	 */
	public function createServiceTranslation__dumper__neon()
	{
		$service = new Kdyby\Translation\Dumper\NeonFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\PhpFileDumper
	 */
	public function createServiceTranslation__dumper__php()
	{
		$service = new Symfony\Component\Translation\Dumper\PhpFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\PoFileDumper
	 */
	public function createServiceTranslation__dumper__po()
	{
		$service = new Symfony\Component\Translation\Dumper\PoFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\QtFileDumper
	 */
	public function createServiceTranslation__dumper__qt()
	{
		$service = new Symfony\Component\Translation\Dumper\QtFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\IcuResFileDumper
	 */
	public function createServiceTranslation__dumper__res()
	{
		$service = new Symfony\Component\Translation\Dumper\IcuResFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\XliffFileDumper
	 */
	public function createServiceTranslation__dumper__xliff()
	{
		$service = new Symfony\Component\Translation\Dumper\XliffFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Dumper\YamlFileDumper
	 */
	public function createServiceTranslation__dumper__yml()
	{
		$service = new Symfony\Component\Translation\Dumper\YamlFileDumper;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Extractor\ChainExtractor
	 */
	public function createServiceTranslation__extractor()
	{
		$service = new Symfony\Component\Translation\Extractor\ChainExtractor;
		$service->addExtractor('latte', $this->getService('translation.extractor.latte'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Extractors\LatteExtractor
	 */
	public function createServiceTranslation__extractor__latte()
	{
		$service = new Kdyby\Translation\Extractors\LatteExtractor;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\FallbackResolver
	 */
	public function createServiceTranslation__fallbackResolver()
	{
		$service = new Kdyby\Translation\FallbackResolver;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\TemplateHelpers
	 */
	public function createServiceTranslation__helpers()
	{
		$service = $this->getService('translation.default')->createTemplateHelpers();
		if (!$service instanceof Kdyby\Translation\TemplateHelpers) {
			throw new Nette\UnexpectedValueException('Unable to create service \'translation.helpers\', value returned by factory is not Kdyby\Translation\TemplateHelpers type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Translation\TranslationLoader
	 */
	public function createServiceTranslation__loader()
	{
		$service = new Kdyby\Translation\TranslationLoader;
		$service->injectServiceIds(array(
			'php' => 'translation.loader.php',
			'yml' => 'translation.loader.yml',
			'xlf' => 'translation.loader.xlf',
			'po' => 'translation.loader.po',
			'mo' => 'translation.loader.mo',
			'ts' => 'translation.loader.ts',
			'csv' => 'translation.loader.csv',
			'res' => 'translation.loader.res',
			'dat' => 'translation.loader.dat',
			'ini' => 'translation.loader.ini',
			'neon' => 'translation.loader.neon',
		), $this);
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\CsvFileLoader
	 */
	public function createServiceTranslation__loader__csv()
	{
		$service = new Symfony\Component\Translation\Loader\CsvFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IcuDatFileLoader
	 */
	public function createServiceTranslation__loader__dat()
	{
		$service = new Symfony\Component\Translation\Loader\IcuDatFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IniFileLoader
	 */
	public function createServiceTranslation__loader__ini()
	{
		$service = new Symfony\Component\Translation\Loader\IniFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\MoFileLoader
	 */
	public function createServiceTranslation__loader__mo()
	{
		$service = new Symfony\Component\Translation\Loader\MoFileLoader;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Loader\NeonFileLoader
	 */
	public function createServiceTranslation__loader__neon()
	{
		$service = new Kdyby\Translation\Loader\NeonFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\PhpFileLoader
	 */
	public function createServiceTranslation__loader__php()
	{
		$service = new Symfony\Component\Translation\Loader\PhpFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\PoFileLoader
	 */
	public function createServiceTranslation__loader__po()
	{
		$service = new Symfony\Component\Translation\Loader\PoFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\IcuResFileLoader
	 */
	public function createServiceTranslation__loader__res()
	{
		$service = new Symfony\Component\Translation\Loader\IcuResFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\QtFileLoader
	 */
	public function createServiceTranslation__loader__ts()
	{
		$service = new Symfony\Component\Translation\Loader\QtFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\XliffFileLoader
	 */
	public function createServiceTranslation__loader__xlf()
	{
		$service = new Symfony\Component\Translation\Loader\XliffFileLoader;
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Loader\YamlFileLoader
	 */
	public function createServiceTranslation__loader__yml()
	{
		$service = new Symfony\Component\Translation\Loader\YamlFileLoader;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\Diagnostics\Panel
	 */
	public function createServiceTranslation__panel()
	{
		$service = new Kdyby\Translation\Diagnostics\Panel('C:\xampp\htdocs\lysec');
		$service->setLocaleWhitelist(array('sk', 'en'));
		$service->setLocaleResolvers(array(
			$this->getService('translation.userLocaleResolver.param'),
			$this->getService('translation.userLocaleResolver.acceptHeader'),
		));
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\MessageSelector
	 */
	public function createServiceTranslation__selector()
	{
		$service = new Symfony\Component\Translation\MessageSelector;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\IUserLocaleResolver
	 */
	public function createServiceTranslation__userLocaleResolver()
	{
		$service = new Kdyby\Translation\LocaleResolver\ChainResolver;
		$service->addResolver($this->getService('translation.userLocaleResolver.acceptHeader'));
		$service->addResolver($this->getService('translation.userLocaleResolver.param'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\AcceptHeaderResolver
	 */
	public function createServiceTranslation__userLocaleResolver__acceptHeader()
	{
		$service = new Kdyby\Translation\LocaleResolver\AcceptHeaderResolver($this->getService('http.request'));
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\LocaleParamResolver
	 */
	public function createServiceTranslation__userLocaleResolver__param()
	{
		$service = new Kdyby\Translation\LocaleResolver\LocaleParamResolver;
		return $service;
	}


	/**
	 * @return Kdyby\Translation\LocaleResolver\SessionResolver
	 */
	public function createServiceTranslation__userLocaleResolver__session()
	{
		$service = new Kdyby\Translation\LocaleResolver\SessionResolver($this->getService('session.session'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Symfony\Component\Translation\Writer\TranslationWriter
	 */
	public function createServiceTranslation__writer()
	{
		$service = new Symfony\Component\Translation\Writer\TranslationWriter;
		$service->addDumper('php', $this->getService('translation.dumper.php'));
		$service->addDumper('xliff', $this->getService('translation.dumper.xliff'));
		$service->addDumper('po', $this->getService('translation.dumper.po'));
		$service->addDumper('mo', $this->getService('translation.dumper.mo'));
		$service->addDumper('yml', $this->getService('translation.dumper.yml'));
		$service->addDumper('neon', $this->getService('translation.dumper.neon'));
		$service->addDumper('qt', $this->getService('translation.dumper.qt'));
		$service->addDumper('csv', $this->getService('translation.dumper.csv'));
		$service->addDumper('ini', $this->getService('translation.dumper.ini'));
		$service->addDumper('res', $this->getService('translation.dumper.res'));
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Bratislava');
		header('X-Frame-Options: SAMEORIGIN');
		header('X-Powered-By: Nette Framework');
		header('Content-Type: text/html; charset=utf-8');
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = TRUE;
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Kdyby\Translation\Diagnostics\Panel::registerBluescreen();
	}

}



final class Container_2243bb3d83_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_2243bb3d83 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('C:\xampp\htdocs\lysec\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->onCompile[] = function($engine) { Kdyby\Translation\Latte\TranslateMacros::install($engine->getCompiler()); };
		$service->addFilter('translate', array(
			$this->container->getService('translation.helpers'),
			'translate',
		));
		$service->addFilter('getTranslator', array(
			$this->container->getService('translation.helpers'),
			'getTranslator',
		));
		return $service;
	}

}
