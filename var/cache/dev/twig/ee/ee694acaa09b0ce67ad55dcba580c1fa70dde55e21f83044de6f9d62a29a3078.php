<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_527562429582bac5600f0dd0244349f63c6450f4529a2f6eb770862066a55a07 extends Twig_Template
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
        $__internal_776bc8a0653dde02ee1b5b8f6aa917286ba9e4f7513c91e37fff7a157d15cfa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776bc8a0653dde02ee1b5b8f6aa917286ba9e4f7513c91e37fff7a157d15cfa1->enter($__internal_776bc8a0653dde02ee1b5b8f6aa917286ba9e4f7513c91e37fff7a157d15cfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_38936fa76084170bbe669f9919fd281a779995e3bba0a94222d7c838492cec79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38936fa76084170bbe669f9919fd281a779995e3bba0a94222d7c838492cec79->enter($__internal_38936fa76084170bbe669f9919fd281a779995e3bba0a94222d7c838492cec79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_776bc8a0653dde02ee1b5b8f6aa917286ba9e4f7513c91e37fff7a157d15cfa1->leave($__internal_776bc8a0653dde02ee1b5b8f6aa917286ba9e4f7513c91e37fff7a157d15cfa1_prof);

        
        $__internal_38936fa76084170bbe669f9919fd281a779995e3bba0a94222d7c838492cec79->leave($__internal_38936fa76084170bbe669f9919fd281a779995e3bba0a94222d7c838492cec79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
