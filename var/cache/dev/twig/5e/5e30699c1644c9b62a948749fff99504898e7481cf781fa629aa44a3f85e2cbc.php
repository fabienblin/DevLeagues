<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a8b6db59e00ee2f5167291af411323c20702efeb9b1085116dbb6c269d92b76f extends Twig_Template
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
        $__internal_1440007964ed26998a00b6eeaf3798305164b510068096a8450bdc3cea4a05a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1440007964ed26998a00b6eeaf3798305164b510068096a8450bdc3cea4a05a3->enter($__internal_1440007964ed26998a00b6eeaf3798305164b510068096a8450bdc3cea4a05a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2a6ba022a8f8fe8297e86c67ca7873c4e7d10058cbc8c82063ccea301db3a1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6ba022a8f8fe8297e86c67ca7873c4e7d10058cbc8c82063ccea301db3a1fc->enter($__internal_2a6ba022a8f8fe8297e86c67ca7873c4e7d10058cbc8c82063ccea301db3a1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1440007964ed26998a00b6eeaf3798305164b510068096a8450bdc3cea4a05a3->leave($__internal_1440007964ed26998a00b6eeaf3798305164b510068096a8450bdc3cea4a05a3_prof);

        
        $__internal_2a6ba022a8f8fe8297e86c67ca7873c4e7d10058cbc8c82063ccea301db3a1fc->leave($__internal_2a6ba022a8f8fe8297e86c67ca7873c4e7d10058cbc8c82063ccea301db3a1fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
