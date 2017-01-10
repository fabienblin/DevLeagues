<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5e3d0512f88d5ad32b0487f1697f144ea2de585c4ba49a831bd0d09a8c19c400 extends Twig_Template
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
        $__internal_ed8e5ad1a1c4b99083ae22bf14b1d5bc0267a27198cb51a7ae21cbea310f39bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8e5ad1a1c4b99083ae22bf14b1d5bc0267a27198cb51a7ae21cbea310f39bb->enter($__internal_ed8e5ad1a1c4b99083ae22bf14b1d5bc0267a27198cb51a7ae21cbea310f39bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_cb5e801875ba4fa3d9e331af9196a55ec6d9dd7f500651d305d726e2014f3c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5e801875ba4fa3d9e331af9196a55ec6d9dd7f500651d305d726e2014f3c98->enter($__internal_cb5e801875ba4fa3d9e331af9196a55ec6d9dd7f500651d305d726e2014f3c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ed8e5ad1a1c4b99083ae22bf14b1d5bc0267a27198cb51a7ae21cbea310f39bb->leave($__internal_ed8e5ad1a1c4b99083ae22bf14b1d5bc0267a27198cb51a7ae21cbea310f39bb_prof);

        
        $__internal_cb5e801875ba4fa3d9e331af9196a55ec6d9dd7f500651d305d726e2014f3c98->leave($__internal_cb5e801875ba4fa3d9e331af9196a55ec6d9dd7f500651d305d726e2014f3c98_prof);

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
