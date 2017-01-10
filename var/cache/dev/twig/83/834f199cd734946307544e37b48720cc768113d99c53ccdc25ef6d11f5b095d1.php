<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e9ed83702efd656f847172b87893010f0f89726bb741a205610ecd4845e87b15 extends Twig_Template
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
        $__internal_2e31669f4201289097768287fb4e9f05866989a5952f7b7fda70f2205177d965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e31669f4201289097768287fb4e9f05866989a5952f7b7fda70f2205177d965->enter($__internal_2e31669f4201289097768287fb4e9f05866989a5952f7b7fda70f2205177d965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_890e633c442d85e7f26c95ef9960417ca370637c36627813cf9402b8e532e3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890e633c442d85e7f26c95ef9960417ca370637c36627813cf9402b8e532e3ab->enter($__internal_890e633c442d85e7f26c95ef9960417ca370637c36627813cf9402b8e532e3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2e31669f4201289097768287fb4e9f05866989a5952f7b7fda70f2205177d965->leave($__internal_2e31669f4201289097768287fb4e9f05866989a5952f7b7fda70f2205177d965_prof);

        
        $__internal_890e633c442d85e7f26c95ef9960417ca370637c36627813cf9402b8e532e3ab->leave($__internal_890e633c442d85e7f26c95ef9960417ca370637c36627813cf9402b8e532e3ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
