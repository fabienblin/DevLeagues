<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5265c63cbc5c1a430ef554800f178360e3e26d03f30233239c1e8abb3584e93c extends Twig_Template
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
        $__internal_a0c0d7d2ceeefcdbf77afbef0f09805690af350efb5d6242729260e3e0133071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c0d7d2ceeefcdbf77afbef0f09805690af350efb5d6242729260e3e0133071->enter($__internal_a0c0d7d2ceeefcdbf77afbef0f09805690af350efb5d6242729260e3e0133071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a0c0d7d2ceeefcdbf77afbef0f09805690af350efb5d6242729260e3e0133071->leave($__internal_a0c0d7d2ceeefcdbf77afbef0f09805690af350efb5d6242729260e3e0133071_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
