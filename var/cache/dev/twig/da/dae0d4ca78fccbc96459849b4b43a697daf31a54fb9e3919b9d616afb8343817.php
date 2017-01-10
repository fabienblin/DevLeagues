<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_dd226d33916924ae5c9c2e60d0e06326a5cce6cb108978b6c92da1c4ca62429f extends Twig_Template
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
        $__internal_0340becddc3f66212bac8dd6e09bcdf7d2197650737be4dc39cbcdd0a87b31c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0340becddc3f66212bac8dd6e09bcdf7d2197650737be4dc39cbcdd0a87b31c1->enter($__internal_0340becddc3f66212bac8dd6e09bcdf7d2197650737be4dc39cbcdd0a87b31c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e690616a74b711f35e86af4a0f74a81057c0475702315edd1825a32a540e0824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e690616a74b711f35e86af4a0f74a81057c0475702315edd1825a32a540e0824->enter($__internal_e690616a74b711f35e86af4a0f74a81057c0475702315edd1825a32a540e0824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0340becddc3f66212bac8dd6e09bcdf7d2197650737be4dc39cbcdd0a87b31c1->leave($__internal_0340becddc3f66212bac8dd6e09bcdf7d2197650737be4dc39cbcdd0a87b31c1_prof);

        
        $__internal_e690616a74b711f35e86af4a0f74a81057c0475702315edd1825a32a540e0824->leave($__internal_e690616a74b711f35e86af4a0f74a81057c0475702315edd1825a32a540e0824_prof);

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
