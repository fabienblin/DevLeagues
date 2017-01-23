<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_337e4359b8a7d8465348452d7d8f74905bc6148c6f7d0feb7aa3ed60bba14402 extends Twig_Template
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
        $__internal_9acc025196de86b3f913acea7002851df64819c90cc3d6e5571ace7359894385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acc025196de86b3f913acea7002851df64819c90cc3d6e5571ace7359894385->enter($__internal_9acc025196de86b3f913acea7002851df64819c90cc3d6e5571ace7359894385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2db164ffdd1f261497be294851c1da16030fcb58b3cd1c796f23a4212eaa6e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db164ffdd1f261497be294851c1da16030fcb58b3cd1c796f23a4212eaa6e1e->enter($__internal_2db164ffdd1f261497be294851c1da16030fcb58b3cd1c796f23a4212eaa6e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9acc025196de86b3f913acea7002851df64819c90cc3d6e5571ace7359894385->leave($__internal_9acc025196de86b3f913acea7002851df64819c90cc3d6e5571ace7359894385_prof);

        
        $__internal_2db164ffdd1f261497be294851c1da16030fcb58b3cd1c796f23a4212eaa6e1e->leave($__internal_2db164ffdd1f261497be294851c1da16030fcb58b3cd1c796f23a4212eaa6e1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
