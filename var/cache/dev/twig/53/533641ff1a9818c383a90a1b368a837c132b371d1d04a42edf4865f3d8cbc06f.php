<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_516721a6db294f1f7a8e9694f165328eab4234ba7c007fc073393d60c03985ef extends Twig_Template
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
        $__internal_cf1123315a6686efd3b6b2fe072e24a081e28066b45263db01fb4c465732e2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1123315a6686efd3b6b2fe072e24a081e28066b45263db01fb4c465732e2a6->enter($__internal_cf1123315a6686efd3b6b2fe072e24a081e28066b45263db01fb4c465732e2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_29f6a72b90256762a0dd1e815bf913b142fc32934223bd9c9aef598baf0f9853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f6a72b90256762a0dd1e815bf913b142fc32934223bd9c9aef598baf0f9853->enter($__internal_29f6a72b90256762a0dd1e815bf913b142fc32934223bd9c9aef598baf0f9853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cf1123315a6686efd3b6b2fe072e24a081e28066b45263db01fb4c465732e2a6->leave($__internal_cf1123315a6686efd3b6b2fe072e24a081e28066b45263db01fb4c465732e2a6_prof);

        
        $__internal_29f6a72b90256762a0dd1e815bf913b142fc32934223bd9c9aef598baf0f9853->leave($__internal_29f6a72b90256762a0dd1e815bf913b142fc32934223bd9c9aef598baf0f9853_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
