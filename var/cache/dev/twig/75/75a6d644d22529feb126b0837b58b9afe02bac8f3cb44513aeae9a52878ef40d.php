<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b3d3b70d9d5d3dde821954d64eb653c0562a8cab648fa6ea1e0971ee3e13fac8 extends Twig_Template
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
        $__internal_ff860bda4084cfda8ca50229300b97d728c31f73aa39e4261d0f9bfdb8b801a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff860bda4084cfda8ca50229300b97d728c31f73aa39e4261d0f9bfdb8b801a8->enter($__internal_ff860bda4084cfda8ca50229300b97d728c31f73aa39e4261d0f9bfdb8b801a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_29611f55f42d5bee29bf92962e12b2ceaab496d782efbe4471c883cd8d034d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29611f55f42d5bee29bf92962e12b2ceaab496d782efbe4471c883cd8d034d45->enter($__internal_29611f55f42d5bee29bf92962e12b2ceaab496d782efbe4471c883cd8d034d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ff860bda4084cfda8ca50229300b97d728c31f73aa39e4261d0f9bfdb8b801a8->leave($__internal_ff860bda4084cfda8ca50229300b97d728c31f73aa39e4261d0f9bfdb8b801a8_prof);

        
        $__internal_29611f55f42d5bee29bf92962e12b2ceaab496d782efbe4471c883cd8d034d45->leave($__internal_29611f55f42d5bee29bf92962e12b2ceaab496d782efbe4471c883cd8d034d45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
