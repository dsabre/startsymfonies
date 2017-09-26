<?php

/* @App/base.html.twig */
class __TwigTemplate_863eaa948edaaeda62025625ae382defb2a333aabc7c881942e728d117a706e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4da2e442019e6f0975dd3cc3e70502ab5130b36e465c8a6cc01477e6506430c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da2e442019e6f0975dd3cc3e70502ab5130b36e465c8a6cc01477e6506430c3->enter($__internal_4da2e442019e6f0975dd3cc3e70502ab5130b36e465c8a6cc01477e6506430c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        $__internal_c0ac5ae6388d7ed9021db2a42497b6957c47cb3ded35ebd3b00773b5a9dd7d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ac5ae6388d7ed9021db2a42497b6957c47cb3ded35ebd3b00773b5a9dd7d7a->enter($__internal_c0ac5ae6388d7ed9021db2a42497b6957c47cb3ded35ebd3b00773b5a9dd7d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <title>Startsymfonies 2</title>

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\">

\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">Startsymfonies 2</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scan");
        echo "\">Launch scan</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start-all");
        echo "\">Start all</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stop-all");
        echo "\">Stop all</a>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <div class=\"input-group mb-2 mb-sm-0\">
                <input id=\"search\" type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\">
                <a href=\"#\" class=\"input-group-addon fa fa-times\" id=\"clearSearch\"></a>
            </div>

            <div class=\"form-check\" style=\"margin-left: 10px;\">
                <label class=\"form-check-label navbar-text\">
                    <input id=\"flgHideStopped\" type=\"checkbox\" class=\"form-check-input\" checked>
                    Hide stopped>
                </label>
            </div>
        </form>
    </div>
</nav>

<div class=\"container-fluid\">
\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

<script>
\t";
        // line 67
        $this->loadTemplate("@App/templates/flashes.js.twig", "@App/base.html.twig", 67)->display($context);
        // line 68
        echo "</script>

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "</body>
</html>";
        
        $__internal_4da2e442019e6f0975dd3cc3e70502ab5130b36e465c8a6cc01477e6506430c3->leave($__internal_4da2e442019e6f0975dd3cc3e70502ab5130b36e465c8a6cc01477e6506430c3_prof);

        
        $__internal_c0ac5ae6388d7ed9021db2a42497b6957c47cb3ded35ebd3b00773b5a9dd7d7a->leave($__internal_c0ac5ae6388d7ed9021db2a42497b6957c47cb3ded35ebd3b00773b5a9dd7d7a_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5498a05c9e22105d4c412308072c7a4073e8f481444c9edb09931ce3d8e8251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5498a05c9e22105d4c412308072c7a4073e8f481444c9edb09931ce3d8e8251->enter($__internal_b5498a05c9e22105d4c412308072c7a4073e8f481444c9edb09931ce3d8e8251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_59a6e7667269ca0c4d2608b323dcaa2842c73623d5b65bb679b2d4e2c31d7312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a6e7667269ca0c4d2608b323dcaa2842c73623d5b65bb679b2d4e2c31d7312->enter($__internal_59a6e7667269ca0c4d2608b323dcaa2842c73623d5b65bb679b2d4e2c31d7312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_59a6e7667269ca0c4d2608b323dcaa2842c73623d5b65bb679b2d4e2c31d7312->leave($__internal_59a6e7667269ca0c4d2608b323dcaa2842c73623d5b65bb679b2d4e2c31d7312_prof);

        
        $__internal_b5498a05c9e22105d4c412308072c7a4073e8f481444c9edb09931ce3d8e8251->leave($__internal_b5498a05c9e22105d4c412308072c7a4073e8f481444c9edb09931ce3d8e8251_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5dca9e34b7d3128b74ffc768d79942ede6e01d0625355a061c9e10cbac8b75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5dca9e34b7d3128b74ffc768d79942ede6e01d0625355a061c9e10cbac8b75e->enter($__internal_d5dca9e34b7d3128b74ffc768d79942ede6e01d0625355a061c9e10cbac8b75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e9a889782e64b96ec30cd6726f50208ae10e00dc3538f639b9fb676653a10cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9a889782e64b96ec30cd6726f50208ae10e00dc3538f639b9fb676653a10cd->enter($__internal_1e9a889782e64b96ec30cd6726f50208ae10e00dc3538f639b9fb676653a10cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e9a889782e64b96ec30cd6726f50208ae10e00dc3538f639b9fb676653a10cd->leave($__internal_1e9a889782e64b96ec30cd6726f50208ae10e00dc3538f639b9fb676653a10cd_prof);

        
        $__internal_d5dca9e34b7d3128b74ffc768d79942ede6e01d0625355a061c9e10cbac8b75e->leave($__internal_d5dca9e34b7d3128b74ffc768d79942ede6e01d0625355a061c9e10cbac8b75e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02b56d410a26843f2f82d935d8f54c35c6e1d1f300c28e1895d7852c18ecd486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b56d410a26843f2f82d935d8f54c35c6e1d1f300c28e1895d7852c18ecd486->enter($__internal_02b56d410a26843f2f82d935d8f54c35c6e1d1f300c28e1895d7852c18ecd486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6170b9605c9b5e0b7b264e12b9f03c5dd3e2be0d508682a735489667f2775b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6170b9605c9b5e0b7b264e12b9f03c5dd3e2be0d508682a735489667f2775b74->enter($__internal_6170b9605c9b5e0b7b264e12b9f03c5dd3e2be0d508682a735489667f2775b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6170b9605c9b5e0b7b264e12b9f03c5dd3e2be0d508682a735489667f2775b74->leave($__internal_6170b9605c9b5e0b7b264e12b9f03c5dd3e2be0d508682a735489667f2775b74_prof);

        
        $__internal_02b56d410a26843f2f82d935d8f54c35c6e1d1f300c28e1895d7852c18ecd486->leave($__internal_02b56d410a26843f2f82d935d8f54c35c6e1d1f300c28e1895d7852c18ecd486_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 70,  150 => 55,  133 => 16,  122 => 71,  120 => 70,  116 => 68,  114 => 67,  101 => 56,  99 => 55,  76 => 35,  70 => 32,  64 => 29,  50 => 17,  48 => 16,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <title>Startsymfonies 2</title>

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\">

\t{% block stylesheets %}{% endblock %}
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">Startsymfonies 2</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('scan') }}\">Launch scan</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('start-all') }}\">Start all</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('stop-all') }}\">Stop all</a>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <div class=\"input-group mb-2 mb-sm-0\">
                <input id=\"search\" type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\">
                <a href=\"#\" class=\"input-group-addon fa fa-times\" id=\"clearSearch\"></a>
            </div>

            <div class=\"form-check\" style=\"margin-left: 10px;\">
                <label class=\"form-check-label navbar-text\">
                    <input id=\"flgHideStopped\" type=\"checkbox\" class=\"form-check-input\" checked>
                    Hide stopped>
                </label>
            </div>
        </form>
    </div>
</nav>

<div class=\"container-fluid\">
\t{% block body %}{% endblock %}
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

<script>
\t{% include '@App/templates/flashes.js.twig' %}
</script>

{% block javascripts %}{% endblock %}
</body>
</html>", "@App/base.html.twig", "/home/dsabre/Lavoro/git/startsymfonies2/src/AppBundle/Resources/views/base.html.twig");
    }
}
