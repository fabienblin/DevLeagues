<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c3ec9d3c8068ffda373764f57a50ce27629a52d3f0ab85c4962b2b9aeb62f093 extends Twig_Template
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
        $__internal_d03f23a83aab95a087cfc73b0a727604d6f9fa574ea5838ba3ebb5f0ac9d9080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03f23a83aab95a087cfc73b0a727604d6f9fa574ea5838ba3ebb5f0ac9d9080->enter($__internal_d03f23a83aab95a087cfc73b0a727604d6f9fa574ea5838ba3ebb5f0ac9d9080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_245b1227e97abd4065428b975d4cb09ea3804da1ac27859c0fa18bb7d0ce2fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245b1227e97abd4065428b975d4cb09ea3804da1ac27859c0fa18bb7d0ce2fbb->enter($__internal_245b1227e97abd4065428b975d4cb09ea3804da1ac27859c0fa18bb7d0ce2fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d03f23a83aab95a087cfc73b0a727604d6f9fa574ea5838ba3ebb5f0ac9d9080->leave($__internal_d03f23a83aab95a087cfc73b0a727604d6f9fa574ea5838ba3ebb5f0ac9d9080_prof);

        
        $__internal_245b1227e97abd4065428b975d4cb09ea3804da1ac27859c0fa18bb7d0ce2fbb->leave($__internal_245b1227e97abd4065428b975d4cb09ea3804da1ac27859c0fa18bb7d0ce2fbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
