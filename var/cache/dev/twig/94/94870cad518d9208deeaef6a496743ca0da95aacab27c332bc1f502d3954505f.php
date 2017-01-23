<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c2572722ca196a8a4336071124dc8443071a9f26f82bd35bf07b451b17bd1d8b extends Twig_Template
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
        $__internal_4f7ad626554ce81fc92a84a87abe2c2aea09782aed96e5731afa7cdfa53c3b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7ad626554ce81fc92a84a87abe2c2aea09782aed96e5731afa7cdfa53c3b58->enter($__internal_4f7ad626554ce81fc92a84a87abe2c2aea09782aed96e5731afa7cdfa53c3b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_701ff77547718152e2b7ec2b44d88cc49fe5e931f2d68f01a0a7cc605954f09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701ff77547718152e2b7ec2b44d88cc49fe5e931f2d68f01a0a7cc605954f09b->enter($__internal_701ff77547718152e2b7ec2b44d88cc49fe5e931f2d68f01a0a7cc605954f09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4f7ad626554ce81fc92a84a87abe2c2aea09782aed96e5731afa7cdfa53c3b58->leave($__internal_4f7ad626554ce81fc92a84a87abe2c2aea09782aed96e5731afa7cdfa53c3b58_prof);

        
        $__internal_701ff77547718152e2b7ec2b44d88cc49fe5e931f2d68f01a0a7cc605954f09b->leave($__internal_701ff77547718152e2b7ec2b44d88cc49fe5e931f2d68f01a0a7cc605954f09b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
