class PatchtesterModelPull extends JModelLegacy
	/**
	 * @var  JHttp
	 */
	protected $transport;

	/**
	 * Constructor
	 *
	 * @param   array  $config  An array of configuration options (name, state, dbo, table_path, ignore_request).
	 *
	 * @since   12.2
	 * @throws  Exception
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);

		// Set up the JHttp object
		$options = new JRegistry;
		$options->set('userAgent', 'JPatchTester/1.0');
		$options->set('timeout', 120);

		$this->transport = JHttpFactory::getHttp($options, 'curl');
	}

		jimport('joomla.filesystem.file');
		$patch = $this->transport->get($pull->diff_url)->body;
				$file->body = $this->transport->get($url)->body;
		jimport('joomla.filesystem.file');
