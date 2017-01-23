<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b6bede880f2b082d4a3c0d236e0e5ec2d6dd1adf46d5e3fdd5eb870fcb58511a extends Twig_Template
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
        $__internal_21fc8dd0757f781dc312d42cd3762b9beb2fb6ad322d1f0185e04ed0959c8dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fc8dd0757f781dc312d42cd3762b9beb2fb6ad322d1f0185e04ed0959c8dc2->enter($__internal_21fc8dd0757f781dc312d42cd3762b9beb2fb6ad322d1f0185e04ed0959c8dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e3a9f33923f157f48b33b70ccc2f5b8a1659f4c83ec0d747a974b1104b603802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a9f33923f157f48b33b70ccc2f5b8a1659f4c83ec0d747a974b1104b603802->enter($__internal_e3a9f33923f157f48b33b70ccc2f5b8a1659f4c83ec0d747a974b1104b603802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_21fc8dd0757f781dc312d42cd3762b9beb2fb6ad322d1f0185e04ed0959c8dc2->leave($__internal_21fc8dd0757f781dc312d42cd3762b9beb2fb6ad322d1f0185e04ed0959c8dc2_prof);

        
        $__internal_e3a9f33923f157f48b33b70ccc2f5b8a1659f4c83ec0d747a974b1104b603802->leave($__internal_e3a9f33923f157f48b33b70ccc2f5b8a1659f4c83ec0d747a974b1104b603802_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
