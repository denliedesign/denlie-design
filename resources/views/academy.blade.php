<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Academy Dance Arts — Website Plan</title>
    <style>
        :root {
            --bg: #f7f5f1;
            --surface: #ffffff;
            --text: #1f2430;
            --muted: #5f6776;
            --line: #d9d4cc;
            --gold: #b78a3b;
            --navy: #273242;
            --shadow: 0 14px 38px rgba(31, 36, 48, 0.08);
            --radius: 22px;
            --radius-sm: 14px;
            --max: 1100px;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            background: linear-gradient(180deg, #fbfaf7 0%, var(--bg) 100%);
            color: var(--text);
        }

        .page {
            max-width: var(--max);
            margin: 0 auto;
            padding: 48px 20px 60px;
        }

        .hero {
            text-align: center;
            margin-bottom: 34px;
        }

        .hero h1 {
            margin: 0;
            font-size: clamp(2rem, 4vw, 3.6rem);
            line-height: 1.08;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .hero h1 .accent { color: var(--gold); }

        .hero p {
            margin: 14px auto 0;
            font-size: clamp(1rem, 1.5vw, 1.35rem);
            color: var(--muted);
            font-style: italic;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 24px;
        }

        .card {
            background: var(--surface);
            border: 1px solid rgba(39, 50, 66, 0.08);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .card__head {
            padding: 20px 26px;
            color: #fff;
        }

        .card--phase1 .card__head {
            background: linear-gradient(135deg, #2e3a4d 0%, #1f2734 100%);
        }

        .card--phase2 .card__head {
            background: linear-gradient(135deg, #c79a48 0%, #ab7a2c 100%);
        }

        .eyebrow {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.14em;
            opacity: 0.9;
            margin-bottom: 8px;
        }

        .card__title {
            margin: 0;
            font-size: clamp(1.5rem, 2.2vw, 2rem);
            line-height: 1.15;
        }

        .card__body {
            padding: 28px 26px 28px;
        }

        .price {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 18px;
            color: var(--navy);
        }

        .subtle {
            color: var(--muted);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        h3 {
            margin: 26px 0 10px;
            font-size: 1.22rem;
            line-height: 1.2;
        }

        ul {
            margin: 0;
            padding-left: 22px;
        }

        li {
            margin: 0 0 10px;
            line-height: 1.55;
            font-size: 1.02rem;
        }

        .results {
            list-style: none;
            padding: 0;
            margin-top: 12px;
        }

        .results li {
            position: relative;
            padding-left: 32px;
            margin-bottom: 12px;
        }

        .results li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: var(--gold);
            font-weight: 700;
            font-size: 1.15rem;
            font-family: Arial, Helvetica, sans-serif;
        }

        .bonus {
            margin-top: 22px;
            padding: 18px 18px 16px;
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            background: #fcfaf6;
        }

        .bonus .label {
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            font-size: 0.8rem;
            color: var(--gold);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .bonus strong {
            display: block;
            font-size: 1.2rem;
            line-height: 1.25;
            margin-bottom: 8px;
        }

        .approach {
            background: var(--surface);
            border: 1px solid rgba(39, 50, 66, 0.08);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .approach__bar {
            background: linear-gradient(135deg, #2e3a4d 0%, #1f2734 100%);
            color: #fff;
            text-align: center;
            padding: 18px 22px;
            font-size: 1.45rem;
            font-weight: 700;
        }

        .approach__body {
            padding: 26px;
        }

        .approach__body h2 {
            text-align: center;
            margin: 0 0 18px;
            font-size: clamp(1.35rem, 2vw, 2rem);
        }

        .mini-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 18px;
        }

        .mini-box {
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
            padding: 18px;
            background: #fcfbf8;
        }

        .mini-box h4 {
            margin: 0 0 10px;
            font-size: 1.06rem;
        }

        .launch {
            margin-top: 22px;
            border-top: 1px solid var(--line);
            padding-top: 22px;
        }

        .launch h4 {
            margin: 0 0 12px;
            text-align: center;
            font-size: 1.1rem;
            color: var(--navy);
        }

        .launch-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .launch-list li {
            margin: 0;
            padding: 14px 16px;
            border: 1px solid var(--line);
            border-radius: 999px;
            text-align: center;
            background: #fcfbf8;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.97rem;
        }

        @media (max-width: 820px) {
            .grid, .mini-grid, .launch-list {
                grid-template-columns: 1fr;
            }

            .page {
                padding: 30px 14px 40px;
            }

            .card__head, .card__body, .approach__body {
                padding-left: 18px;
                padding-right: 18px;
            }
        }
    </style>
</head>
<body>
<main class="page">
    <section class="hero">
        <h1>The Academy of Dance Arts <br> <span class="accent">Website Plan</span></h1>
        <p>Clearer for families. Built to grow.</p>
    </section>

    <section class="grid">
        <article class="card card--phase1">
            <div class="card__head">
                <div class="eyebrow">Start Here</div>
                <h2 class="card__title">Phase 1 — Core Website</h2>
            </div>
            <div class="card__body">
                <div class="price">$4,000</div>
                <p class="subtle">A focused rebuild that makes it easy for families to understand where their child fits, what classes to take, and how to get started.</p>

                <h3>Includes</h3>
                <ul>
                    <li>Site rebuild</li>
                    <li>Clear age + program structure</li>
                    <li>Simple funnel & navigation</li>
                    <li>Mobile-friendly design</li>
                    <li>Cleaner testimonials</li>
                </ul>

                <h3>Result</h3>
                <ul class="results">
                    <li>More inquiries</li>
                    <li>Easier decisions for parents</li>
                    <li>Strong foundation</li>
                </ul>
            </div>
        </article>

        <article class="card card--phase2">
            <div class="card__head">
                <div class="eyebrow">Optional</div>
                <h2 class="card__title">Phase 2 — Growth + Tools</h2>
            </div>
            <div class="card__body">
                <div class="price">Add anytime</div>
                <p class="subtle">Advanced features can be layered in later, with no timeline required.</p>

                <h3>Includes</h3>
                <ul>
                    <li>Scheduling tools</li>
                    <li>Placement system</li>
                    <li>Recital hub</li>
                </ul>

                <div class="bonus">
                    <div class="label">Bonus Opportunity</div>
                    <strong>Illinois Ballet Theatre mini-site</strong>
                    <div class="subtle">1–2 pages · + $99/mo hosting + maintenance</div>
                </div>

                <h3>Result</h3>
                <ul class="results">
                    <li>Higher conversion</li>
                    <li>Unique experience</li>
                    <li>Long-term growth</li>
                </ul>
            </div>
        </article>
    </section>

    <section class="approach">
        <div class="approach__bar">Simple Approach</div>
        <div class="approach__body">
            <h2>Start with clarity → Build over time</h2>

            <div class="mini-grid">
                <div class="mini-box">
                    <h4>Phase 1 solves the biggest issues now</h4>
                    <p class="subtle">Get the site structure, homepage messaging, and family journey right first.</p>
                </div>
                <div class="mini-box">
                    <h4>Phase 2 adds tools when ready</h4>
                    <p class="subtle">Layer in advanced features later without pressure or a fixed timeline.</p>
                </div>
            </div>

            <div class="launch">
                <h4>What this looks like at launch</h4>
                <ul class="launch-list">
                    <li>Site launches ready</li>
                    <li>Enrollio can be integrated</li>
                    <li>SEO + tracking set up</li>
                </ul>
            </div>
        </div>
    </section>
</main>
</body>
</html>
