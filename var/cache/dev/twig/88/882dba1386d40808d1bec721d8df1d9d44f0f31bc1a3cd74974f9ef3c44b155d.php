<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_22c6da905a3ccd435b82801a4ed3639a98476bbef202fcfd860eb6598bee0c9a extends Twig_Template
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
        $__internal_d47e2a6d5a0ab1f562e319b480de2ad558e372c53dae2617a3f1b3f289a55a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47e2a6d5a0ab1f562e319b480de2ad558e372c53dae2617a3f1b3f289a55a32->enter($__internal_d47e2a6d5a0ab1f562e319b480de2ad558e372c53dae2617a3f1b3f289a55a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d29db585a5c66c0846f63963dc2f21fcec941ad3ff5f0ea1bc51324d1a948d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29db585a5c66c0846f63963dc2f21fcec941ad3ff5f0ea1bc51324d1a948d0a->enter($__internal_d29db585a5c66c0846f63963dc2f21fcec941ad3ff5f0ea1bc51324d1a948d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d47e2a6d5a0ab1f562e319b480de2ad558e372c53dae2617a3f1b3f289a55a32->leave($__internal_d47e2a6d5a0ab1f562e319b480de2ad558e372c53dae2617a3f1b3f289a55a32_prof);

        
        $__internal_d29db585a5c66c0846f63963dc2f21fcec941ad3ff5f0ea1bc51324d1a948d0a->leave($__internal_d29db585a5c66c0846f63963dc2f21fcec941ad3ff5f0ea1bc51324d1a948d0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
