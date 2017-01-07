<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_51269f3df1634d3acf9c65d71b4f423b88f35e2ae75a59d2093788d0d5b63a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c34dff6622027fc843d44a424bcb9ab85697b64ed7b2b5e5917345ea331728d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34dff6622027fc843d44a424bcb9ab85697b64ed7b2b5e5917345ea331728d9->enter($__internal_c34dff6622027fc843d44a424bcb9ab85697b64ed7b2b5e5917345ea331728d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2204707382fac957f266d8227fd9ff3b038c5bf2ecc43bdcacceaba690534e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2204707382fac957f266d8227fd9ff3b038c5bf2ecc43bdcacceaba690534e97->enter($__internal_2204707382fac957f266d8227fd9ff3b038c5bf2ecc43bdcacceaba690534e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c34dff6622027fc843d44a424bcb9ab85697b64ed7b2b5e5917345ea331728d9->leave($__internal_c34dff6622027fc843d44a424bcb9ab85697b64ed7b2b5e5917345ea331728d9_prof);

        
        $__internal_2204707382fac957f266d8227fd9ff3b038c5bf2ecc43bdcacceaba690534e97->leave($__internal_2204707382fac957f266d8227fd9ff3b038c5bf2ecc43bdcacceaba690534e97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
