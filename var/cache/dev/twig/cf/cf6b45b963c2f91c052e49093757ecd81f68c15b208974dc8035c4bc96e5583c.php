<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_65511ec92bea0177b8a497921aa3bbcf776c57f318728800e69847ba3bc9fc93 extends Twig_Template
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
        $__internal_eb9a92dcd192ebacb10b59c62a433c2f51e863095f43e8aa7a5a0339006ac57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9a92dcd192ebacb10b59c62a433c2f51e863095f43e8aa7a5a0339006ac57d->enter($__internal_eb9a92dcd192ebacb10b59c62a433c2f51e863095f43e8aa7a5a0339006ac57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4a2370c1005686f67d7cdf5d5d2bb3692e253728dec6727be306e2894627dd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2370c1005686f67d7cdf5d5d2bb3692e253728dec6727be306e2894627dd6a->enter($__internal_4a2370c1005686f67d7cdf5d5d2bb3692e253728dec6727be306e2894627dd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_eb9a92dcd192ebacb10b59c62a433c2f51e863095f43e8aa7a5a0339006ac57d->leave($__internal_eb9a92dcd192ebacb10b59c62a433c2f51e863095f43e8aa7a5a0339006ac57d_prof);

        
        $__internal_4a2370c1005686f67d7cdf5d5d2bb3692e253728dec6727be306e2894627dd6a->leave($__internal_4a2370c1005686f67d7cdf5d5d2bb3692e253728dec6727be306e2894627dd6a_prof);

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
