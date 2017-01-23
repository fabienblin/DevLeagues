<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_52711e314c979069c6045357a724a80e859a9ec6e48cb2e3d5b838e3f4353dac extends Twig_Template
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
        $__internal_5121fd13423f19a7f77211fcd8f6985e706e444d8c79b13c919e7e3ecadde795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5121fd13423f19a7f77211fcd8f6985e706e444d8c79b13c919e7e3ecadde795->enter($__internal_5121fd13423f19a7f77211fcd8f6985e706e444d8c79b13c919e7e3ecadde795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c1b1af37e2be33ee6f3b9118254ba31efe7be0032788feb2169e1bc636278a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b1af37e2be33ee6f3b9118254ba31efe7be0032788feb2169e1bc636278a95->enter($__internal_c1b1af37e2be33ee6f3b9118254ba31efe7be0032788feb2169e1bc636278a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5121fd13423f19a7f77211fcd8f6985e706e444d8c79b13c919e7e3ecadde795->leave($__internal_5121fd13423f19a7f77211fcd8f6985e706e444d8c79b13c919e7e3ecadde795_prof);

        
        $__internal_c1b1af37e2be33ee6f3b9118254ba31efe7be0032788feb2169e1bc636278a95->leave($__internal_c1b1af37e2be33ee6f3b9118254ba31efe7be0032788feb2169e1bc636278a95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
