<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_33b48084e0d78cd95bbeda5bd5c3e07aed7761fb3d8e9565b6c542a9d7e15387 extends Twig_Template
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
        $__internal_839841bdc55715d99755beead2f3d02f59e9706328b153355e763059a8ba11b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839841bdc55715d99755beead2f3d02f59e9706328b153355e763059a8ba11b3->enter($__internal_839841bdc55715d99755beead2f3d02f59e9706328b153355e763059a8ba11b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7c2bfb1ef348f6212a422f5cd77746add8b31fb78773ceb0ffe6ce545a074636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2bfb1ef348f6212a422f5cd77746add8b31fb78773ceb0ffe6ce545a074636->enter($__internal_7c2bfb1ef348f6212a422f5cd77746add8b31fb78773ceb0ffe6ce545a074636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_839841bdc55715d99755beead2f3d02f59e9706328b153355e763059a8ba11b3->leave($__internal_839841bdc55715d99755beead2f3d02f59e9706328b153355e763059a8ba11b3_prof);

        
        $__internal_7c2bfb1ef348f6212a422f5cd77746add8b31fb78773ceb0ffe6ce545a074636->leave($__internal_7c2bfb1ef348f6212a422f5cd77746add8b31fb78773ceb0ffe6ce545a074636_prof);

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
